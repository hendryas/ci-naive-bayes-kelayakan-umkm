<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Responsive Admin Dashboard Template">
  <meta name="keywords" content="admin,dashboard">
  <meta name="author" content="stacks">
  <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>Circl - Responsive Admin Dashboard Template</title>

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
  <link href="<?= base_url(); ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>plugins/font-awesome/css/all.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">


  <!-- Theme Styles -->
  <link href="<?= base_url(); ?>css/main.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>css/custom.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
  <div class='loader'>
    <div class='spinner-grow text-primary' role='status'>
      <span class='sr-only'>Loading...</span>
    </div>
  </div>

  <div class="page-container">
    <div class="page-header">
      <nav class="navbar navbar-expand-lg d-flex justify-content-between">
        <div class="" id="navbarNav">
          <ul class="navbar-nav" id="leftNav">
            <li class="nav-item">
              <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
          </ul>
        </div>
        <div class="" id="headerNav">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
              <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu" aria-labelledby="searchDropDown">
                <form>
                  <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
                </form>
                <h6 class="dropdown-header">Recent Searches</h6>
                <a class="dropdown-item" href="#">file manager</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link notifications-dropdown" href="#" id="notificationsDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">3</a>
              <div class="dropdown-menu dropdown-menu-end notif-drop-menu" aria-labelledby="notificationsDropDown">
                <h6 class="dropdown-header">Notifications</h6>
                <a href="#">
                  <div class="header-notif">
                    <div class="notif-image">
                      <span class="notification-badge bg-info text-white">
                        <i class="fas fa-bullhorn"></i>
                      </span>
                    </div>
                    <div class="notif-text">
                      <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                      <small>19:00</small>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="header-notif">
                    <div class="notif-image">
                      <span class="notification-badge bg-primary text-white">
                        <i class="fas fa-bolt"></i>
                      </span>
                    </div>
                    <div class="notif-text">
                      <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                      <small>18:00</small>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="header-notif">
                    <div class="notif-image">
                      <span class="notification-badge bg-success text-white">
                        <i class="fas fa-at"></i>
                      </span>
                    </div>
                    <div class="notif-text">
                      <p>faucibus dolor in commodo lectus mattis</p>
                      <small>yesterday</small>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="header-notif">
                    <div class="notif-image">
                      <span class="notification-badge">
                        <img src="<?= base_url(); ?>images/avatars/profile-image.png" alt="">
                      </span>
                    </div>
                    <div class="notif-text">
                      <p>faucibus dolor in commodo lectus mattis</p>
                      <small>yesterday</small>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="header-notif">
                    <div class="notif-image">
                      <span class="notification-badge">
                        <img src="<?= base_url(); ?>images/avatars/profile-image.png" alt="">
                      </span>
                    </div>
                    <div class="notif-text">
                      <p>faucibus dolor in commodo lectus mattis</p>
                      <small>yesterday</small>
                    </div>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?= base_url(); ?>images/avatars/profile-image.png" alt=""></a>
              <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Messages</a>
                <a class="dropdown-item" href="#"><i data-feather="edit"></i>Activities<span class="badge rounded-pill bg-success">12</span></a>
                <a class="dropdown-item" href="#"><i data-feather="check-circle"></i>Tasks</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a>
                <a class="dropdown-item" href="#"><i data-feather="unlock"></i>Lock</a>
                <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="page-sidebar">
      <ul class="list-unstyled accordion-menu">
        <li class="sidebar-title">
          Main
        </li>
        <li>
          <a href="index.html"><i data-feather="home"></i>Dashboard</a>
        </li>
        <li class="sidebar-title">
          Apps
        </li>
        <li>
          <a href="file-manager.html"><i data-feather="message-circle"></i>Formulir UMKM</a>
        </li>
      </ul>
    </div>
    <div class="page-content">
      <div class="main-wrapper">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Formulir Pendaftaran UMKM</h5>

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

                  <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Javascripts -->
  <script src="<?= base_url(); ?>plugins/jquery/jquery-3.4.1.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="<?= base_url(); ?>plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="<?= base_url(); ?>plugins/perfectscroll/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url(); ?>js/main.min.js"></script>
</body>

</html>