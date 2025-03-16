from flask import Flask, request, jsonify
from flask_cors import CORS
import numpy as np
import pandas as pd
from sklearn.naive_bayes import GaussianNB
import logging
import os

# Inisialisasi Flask
app = Flask(__name__)
CORS(app)  # Mengizinkan akses dari CodeIgniter ke Flask API

# Konfigurasi Logging
logging.basicConfig(level=logging.INFO)

# 📌 Memuat Dataset dari CSV
csv_path = "data_latih_200_balanced.csv"  # Gunakan dataset yang telah diperbaiki

if not os.path.exists(csv_path):
    raise FileNotFoundError(f"File {csv_path} tidak ditemukan! Pastikan ada di direktori yang benar.")

data_latih = pd.read_csv(csv_path)

# Pastikan dataset tidak kosong
if data_latih.empty:
    raise ValueError("Dataset kosong! Pastikan CSV berisi data sebelum melatih model.")

# Pastikan dataset memiliki semua fitur yang diperlukan
if 'layak' not in data_latih.columns:
    raise ValueError("Kolom 'layak' tidak ditemukan dalam dataset! Pastikan CSV memiliki kolom target.")

# Pastikan tidak ada data yang kosong dalam dataset
if data_latih.isnull().values.any():
    raise ValueError("Dataset mengandung nilai kosong (NaN). Pastikan semua data terisi dengan benar.")

# Cek distribusi kelas
class_distribution = data_latih['layak'].value_counts()
logging.info(f"Distribusi kelas dalam dataset: \n{class_distribution}")

if len(class_distribution) < 2:
    raise ValueError("Dataset hanya memiliki satu kelas! Tambahkan lebih banyak data yang mencakup kedua kelas (layak=0 dan layak=1).")

# 📌 Melatih Model Naïve Bayes
X = data_latih.drop(columns=['layak'])  # Fitur (tanpa target)
y = data_latih['layak']  # Target
model = GaussianNB()
model.fit(X, y)

# 📌 Endpoint untuk Mengecek Status API
@app.route('/', methods=['GET'])
def home():
    return jsonify({"status": "success", "message": "Flask API is running!"})

# 📌 Menangani request POST yang salah ke "/"
@app.route('/', methods=['POST'])
def home_post():
    return jsonify({"status": "error", "message": "Gunakan endpoint /predict untuk melakukan prediksi"}), 400

# 📌 API Endpoint untuk Prediksi Kelayakan UMKM
@app.route('/predict', methods=['POST'])
def predict():
    try:
        data = request.get_json()
        logging.info(f"Data diterima: {data}")  # Logging data request

        # Pastikan semua field dikirim
        required_fields = list(X.columns)
        for field in required_fields:
            if field not in data:
                return jsonify({'status': 'error', 'message': f'Field {field} tidak ditemukan dalam request'}), 400

        # Konversi input ke numpy array dengan validasi
        try:
            input_data = np.array([float(data[field]) for field in required_fields]).reshape(1, -1)
        except ValueError:
            return jsonify({'status': 'error', 'message': 'Format data tidak valid! Pastikan semua nilai numerik.'}), 400

        # Perbaiki peringatan dengan mengubah input menjadi DataFrame dengan nama kolom yang sesuai
        input_df = pd.DataFrame(input_data, columns=required_fields)

        # Cek apakah model memiliki lebih dari satu kelas
        if len(model.classes_) < 2:
            return jsonify({'status': 'error', 'message': 'Model hanya mengenali satu kelas. Tambahkan lebih banyak data untuk kedua kelas!'}), 500

        # Prediksi dengan Naïve Bayes
        hasil_prediksi = model.predict(input_df)
        hasil_probabilitas = model.predict_proba(input_df)

        # Pastikan probabilitas yang dikembalikan valid
        if hasil_probabilitas.shape[1] != 2:
            return jsonify({'status': 'error', 'message': 'Model gagal memberikan prediksi probabilitas yang valid. Periksa kembali dataset.'}), 500

        response = {
            'status': 'success',
            'prediksi': 'Layak' if hasil_prediksi[0] == 1 else 'Tidak Layak',
            'probabilitas': {
                'layak': float(hasil_probabilitas[0][1]),
                'tidak_layak': float(hasil_probabilitas[0][0])
            }
        }
        
        return jsonify(response)

    except Exception as e:
        logging.error(f"Terjadi kesalahan: {str(e)}")
        return jsonify({'status': 'error', 'message': str(e)}), 400


# 📌 Menjalankan Flask API dengan Port yang Bisa Dikonfigurasi
if __name__ == '__main__':
    port = int(os.environ.get("PORT", 5000))  # Default port 5000, bisa diubah dengan env variable
    app.run(debug=True, host='0.0.0.0', port=port)
