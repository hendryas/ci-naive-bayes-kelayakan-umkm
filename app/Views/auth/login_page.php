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
  <script src="<?= base_url(); ?>plugins/jquery/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="login-page">
  <div class='loader'>
    <div class='spinner-grow text-primary' role='status'>
      <span class='sr-only'>Loading...</span>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-12 col-lg-4">
        <div class="card login-box-container">
          <div class="card-body">
            <div class="authent-logo">
              <img src="../../assets/images/logo@2x.png" alt="">
            </div>
            <div class="authent-text">
              <p>Selamat Data di Aplikasi Kelayakan UMKM</p>
              <p>Silahkan login untuk melanjutkan</p>
            </div>

            <form id="loginForm">
              <div class="mb-3">
                <div class="form-floating">
                  <input type="text" class="form-control" id="username" placeholder="Username" autocomplete="off">
                  <label for="username">Username</label>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-floating">
                  <input type="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-info m-b-xs">Sign In</button>
              </div>
            </form>

            <div class="authent-reg">
              <p>Not registered? <a href="register.html">Create an account</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SweetAlert Library -->

  <script>
    $(document).ready(function() {
      $("#loginForm").submit(function(e) {
        e.preventDefault();

        let username = $("#username").val().trim();
        let password = $("#password").val().trim();

        if (username === "" || password === "") {
          Swal.fire({
            icon: "warning",
            title: "Oops...",
            text: "Username dan password harus diisi!",
          });
          return;
        }

        $.ajax({
          url: "<?= base_url('auth/login'); ?>",
          type: "POST",
          data: {
            username: username,
            password: password
          },
          dataType: "json",
          success: function(response) {
            console.log(response);
            if (response.status === 200) {
              Swal.fire({
                icon: "success",
                title: "Login Berhasil",
                text: "Selamat datang " + response.user.username,
                showConfirmButton: false,
                timer: 1500
              }).then(() => {
                window.location.href = "<?= base_url('dashboard'); ?>"; // Redirect ke dashboard
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Login Gagal",
                text: response.message,
              });
            }
          },
          error: function(xhr, status, error) {
            console.log(xhr.responseText); // Debugging error response
            let errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Terjadi kesalahan, silakan coba lagi!";
            Swal.fire({
              icon: "error",
              title: "Login Gagal",
              text: errorMessage,
            });
          }
        });
      });
    });
  </script>

  <!-- Javascripts -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="<?= base_url(); ?>plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="<?= base_url(); ?>plugins/perfectscroll/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url(); ?>js/main.min.js"></script>
</body>

</html>