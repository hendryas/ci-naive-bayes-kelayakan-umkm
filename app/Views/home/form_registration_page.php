<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oya - Sistem Penentu Kelayakan UMKM</title>
  <link rel="icon" href="images/favicon.png">

  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/LineIcons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fakeLoader.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>

<body>

  <!-- loader -->
  <div class="fakeLoader"></div>
  <!-- end loader -->

  <!-- navbar -->
  <nav class="navbar navbar-expand-md fixed-top">
    <div class="container">
      <a href="index.html" class="navbar-brand"><img src="<?= base_url(); ?>assets/images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#goals">Goals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#category">Category</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- description -->
  <div class="pricing section mt-5" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Formulir Pendaftaran UMKM</h5>

              <!-- Notifikasi -->
              <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
              <?php elseif (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
              <?php endif; ?>

              <form action="<?= base_url('/umkm/submit') ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label class="form-label">Nama Usaha</label>
                  <input type="text" name="nama_usaha" class="form-control" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Pemilik Usaha</label>
                  <input type="text" name="pemilik_usaha" class="form-control" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">No. Telepon</label>
                  <input type="text" name="no_telepon" class="form-control" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Alamat Usaha</label>
                  <textarea name="alamat_usaha" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                  <label class="form-label">Upload Logo Usaha (Maksimal 2MB, Format: JPG, PNG, JPEG)</label>
                  <input type="file" name="logo_usaha" class="form-control" accept="image/png, image/jpeg, image/jpg" required>
                  <?php if (session()->getFlashdata('error')): ?>
                    <small class="text-danger"><?= session()->getFlashdata('error') ?></small>
                  <?php endif; ?>
                </div>

                <div class="mb-3">
                  <label class="form-label">Pendapatan Bulanan</label>
                  <select name="pendapatan" class="form-control">
                    <option value="Rendah">Rendah</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Tinggi">Tinggi</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label class="form-label">Jumlah Karyawan</label>
                  <select name="jumlah_karyawan" class="form-control">
                    <option value="Sedikit">Sedikit (1-5 orang)</option>
                    <option value="Sedang">Sedang (6-20 orang)</option>
                    <option value="Banyak">Banyak (>20 orang)</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label class="form-label">Modal Awal</label>
                  <select name="modal_awal" class="form-control">
                    <option value="Rendah">Rendah (≤ 10 juta)</option>
                    <option value="Sedang">Sedang (10-50 juta)</option>
                    <option value="Tinggi">Tinggi (> 50 juta)</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label class="form-label">Legalitas Usaha</label>
                  <select name="legalitas" class="form-control">
                    <option value="Ada">Ada</option>
                    <option value="Tidak Ada">Tidak Ada</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label class="form-label">Lama Berdiri</label>
                  <select name="lama_berdiri" class="form-control">
                    <option value="0-1 tahun">0-1 tahun</option>
                    <option value="2-5 tahun">2-5 tahun</option>
                    <option value=">5 tahun">Lebih dari 5 tahun</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label class="form-label">Jenis Usaha</label>
                  <select name="jenis_usaha" class="form-control">
                    <option value="Jasa">Jasa</option>
                    <option value="Dagang">Dagang</option>
                    <option value="Manufaktur">Manufaktur</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label class="form-label">Lokasi Usaha</label>
                  <select name="lokasi_usaha" class="form-control">
                    <option value="Perkotaan">Perkotaan</option>
                    <option value="Pedesaan">Pedesaan</option>
                  </select>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End description -->


  <!-- footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="content">
            <div class="brand"><img src="<?= base_url(); ?>assets/images/logo2.png" alt=""></div>
            <p>Bersama, kita wujudkan pertumbuhan ekonomi yang inklusif dan berkelanjutan bagi UMKM di Indonesia!</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="content">
            <h5>About</h5>
            <ul>
              <li><a href=""><i class="fa fa-angle-double-right"></i> About us</a></li>
              <li><a href=""><i class="fa fa-angle-double-right"></i> Contact</a></li>
              <li><a href=""><i class="fa fa-angle-double-right"></i> Portfolio</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="content">
            <h5>Support</h5>
            <ul>
              <li><a href=""><i class="fa fa-angle-double-right"></i> smart-umkm@gmail.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="content">
            <h5>Follow us</h5>
            <ul class="social">
              <li><a href=""><i class="fab fa-facebook-f"></i> Facebook</a></li>
              <li><a href=""><i class="fab fa-twitter"></i> Twitter
                </a></li>
              <li><a href=""><i class="fab fa-instagram"></i> Instagram</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->

  <!-- footer bottom -->
  <div class="footer-bottom">
    <span>Copyright © Smart UMKM</span>
  </div>
  <!-- end footer bottom -->

  <!-- script -->
  <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/fakeLoader.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery.filterizr.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/magnific-popup.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/contact-form.js"></script>
  <script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>

</html>