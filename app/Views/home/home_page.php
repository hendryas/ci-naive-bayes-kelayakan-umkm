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

  <!-- home intro -->
  <div class="home-intro" id="home">
    <div class="container">
      <div class="row">
        <div class="col col-sm-12 col-md-6 col-12">
          <div class="content">
            <h5><span class="line"></span>SELAMAT DATANG DI PORTAL</h5>
            <h2>PENENTUAN</h2>
            <h2>KELAYAKAN</h2>
            <h2>UMKM</h2>
            <ul>
              <li><a href="/form-registration" class="button">Gabung</a></li>
            </ul>
          </div>
        </div>
        <div class="col col-sm-12 col-md-6 col-12">
          <div class="content-image">
            <img src="<?= base_url(); ?>assets/images/hero-umkm.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end end intro -->
  <!-- description -->
  <div class="pricing section" id="about">
    <div class="container">
      <div class="row align-items-center">

        <!-- Kolom Gambar -->
        <div class="col-12 col-md-6 text-center">
          <div class="content-image">
            <img src="<?= base_url(); ?>assets/images/shopping.jpg" alt="UMKM Shopping" class="img-fluid" width="500">
          </div>
        </div>

        <!-- Kolom Deskripsi -->
        <div class="col-12 col-md-6">
          <div class="content-text">
            <h2 class="fw-bold">Sistem Penentu Kelayakan Bantuan UMKM</h2>
            <p>
              Sistem ini adalah sebuah platform digital yang dirancang untuk mempermudah proses penentuan
              UMKM yang berhak mendapatkan bantuan. Dengan memanfaatkan teknologi <strong>Machine Learning</strong>,
              khususnya algoritma <strong>Naïve Bayes</strong>, sistem ini secara otomatis menganalisis data UMKM
              berdasarkan berbagai kriteria seperti:
            </p>
            <ul>
              <li>Pendapatan</li>
              <li>Jumlah Karyawan</li>
              <li>Modal Usaha</li>
              <li>Legalitas</li>
              <li>Lama Berdiri</li>
            </ul>
            <p>
              Hasil analisis ini kemudian digunakan untuk menentukan apakah UMKM tersebut
              <strong>layak atau tidak layak</strong> mendapatkan bantuan.
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End description -->

  <!-- about -->
  <div class="about section bg-grey" id="goals">
    <div class="container">
      <div class="title-section">
        <p>ABOUT US</p>
        <h3>Our goal is to</h3>
        <h3>make your life easier</h3>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="content">
            <i class="lni lni-bulb"></i>
            <h5>Create Idea</h5>
            <p class="mb-0">Kami membantu UMKM dalam mengembangkan ide usaha dengan memberikan akses ke informasi, peluang, dan rekomendasi strategi bisnis berbasis data.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="content">
            <i class="lni lni-sun"></i>
            <h5>Smart Solutions</h5>
            <p class="mb-0">Menggunakan algoritma Naïve Bayes, sistem ini menganalisis data UMKM secara objektif untuk menentukan apakah mereka layak menerima bantuan. Prediksi ini didasarkan pada faktor-faktor utama seperti pendapatan, legalitas usaha, jumlah karyawan, dan modal awal.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="content">
            <i class="lni lni-comments"></i>
            <h5>Free Support</h5>
            <p class="mb-0">Kami tidak hanya memberikan analisis, tetapi juga dukungan dan konsultasi bagi UMKM yang membutuhkan bimbingan untuk memenuhi kriteria kelayakan. Dengan panduan dari sistem, UMKM dapat meningkatkan peluang mereka dalam mendapatkan bantuan yang sesuai.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end about -->

  <!-- portfolio -->
  <div class="portfolio section" id="category">
    <div class="container">
      <div class="title-section">
        <p>Category</p>
        <h3>See our <span>category</span></h3>
      </div>
      <div class="box-content">
        <div class="portfolio-filter-menu">
          <ul>
            <li data-filter="all" class="active">
              <span>Show All</span>
            </li>
            <li data-filter="1">
              <span>Makanan & Minuman</span>
            </li>
            <li data-filter="2">
              <span>Fashion & Kerajinan</span>
            </li>
            <li data-filter="3">
              <span>Jasa & Layanan</span>
            </li>
            <li data-filter="4">
              <span>Teknologi & Digital</span>
            </li>
            <li data-filter="5">
              <span>Retail & Perdagangan</span>
            </li>
          </ul>
        </div>
        <div class="row no-gutters filtr-container">
          <div class="col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="3">
            <div class="content-image">
              <a href="images/portfolio1.jpg" class="portfolio-popup">
                <img src="<?= base_url(); ?>assets/images/portfolio1.jpg" alt="">
                <div class="image-overlay"></div>
                <div class="portfolio-caption">
                  <div class="title">
                    <h4>Modern Design</h4>
                    <span>Graphic Design</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="1">
            <div class="content-image">
              <a href="images/portfolio2.jpg" class="portfolio-popup">
                <img src="<?= base_url(); ?>assets/images/portfolio2.jpg" alt="">
                <div class="image-overlay"></div>
                <div class="portfolio-caption">
                  <div class="title">
                    <h4>Modern Design</h4>
                    <span>Graphic Design</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="2, 1">
            <div class="content-image">
              <a href="images/portfolio3.jpg" class="portfolio-popup">
                <img src="<?= base_url(); ?>assets/images/portfolio3.jpg" alt="">
                <div class="image-overlay"></div>
                <div class="portfolio-caption">
                  <div class="title">
                    <h4>Modern Design</h4>
                    <span>Graphic Design</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="3">
            <div class="content-image">
              <a href="images/portfolio4.jpg" class="portfolio-popup">
                <img src="<?= base_url(); ?>assets/images/portfolio4.jpg" alt="">
                <div class="image-overlay"></div>
                <div class="portfolio-caption">
                  <div class="title">
                    <h4>Modern Design</h4>
                    <span>Graphic Design</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="1, 2">
            <div class="content-image">
              <a href="images/portfolio5.jpg" class="portfolio-popup">
                <img src="<?= base_url(); ?>assets/images/portfolio5.jpg" alt="">
                <div class="image-overlay"></div>
                <div class="portfolio-caption">
                  <div class="title">
                    <h4>Modern Design</h4>
                    <span>Graphic Design</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="3, 1">
            <div class="content-image">
              <a href="images/portfolio6.jpg" class="portfolio-popup">
                <img src="<?= base_url(); ?>assets/images/portfolio6.jpg" alt="">
                <div class="image-overlay"></div>
                <div class="portfolio-caption">
                  <div class="title">
                    <h4>Modern Design</h4>
                    <span>Graphic Design</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end portfolio -->

  <!-- testimonial -->
  <div class="testimonial section bg-grey" id="testimonial">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <span><i class="lni lni-quotation"></i></span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae totam corporis asperiores, id rerum quod officia, dolor ducimus earum doloremque ipsa vel, debitis dolorem, laudantium! In veritatis a, atque!</p>
            <h5>Jamal Ali</h5>
            <span>themeforest.net</span>
          </div>
          <div class="carousel-item">
            <span><i class="lni lni-quotation"></i></span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae totam corporis asperiores, id rerum quod officia, dolor ducimus earum doloremque ipsa vel, debitis dolorem, laudantium! In veritatis a, atque!</p>
            <h5>Nabil Dirar</h5>
            <span>envato.com</span>
          </div>
          <div class="carousel-item">
            <span><i class="lni lni-quotation"></i></span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestiae totam corporis asperiores, id rerum quod officia, dolor ducimus earum doloremque ipsa vel, debitis dolorem, laudantium! In veritatis a, atque!</p>
            <h5>Moussa Silla</h5>
            <span>codecanyon.com</span>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end testimonial -->

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