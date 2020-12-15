<?php
session_start();
require_once '../libs/user.php';
require_once '../config/config.php';
//Nếu đã đăng nhập rồi thì check_session
check_session();
extract($_REQUEST);
if (isset($btnsignup)) {
  if (check_user($username)) {
    //Trong trường hợp dã tồn tại username thì ko insert
    echo "<script> alert('username đã tồn tại') </script>";
    } else {
      $passHash = password_hash($password, PASSWORD_BCRYPT);
      echo $passHash;
      $date = date('Y-m-d');
      register_user($fullname, $username, $email, $passHash, 100, $address, $phone, 1, $date);
      echo "<script>
            alert('Đăng ký thành công');
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
            </script>";
      header("location:" . ROOT);
    }
  } else {
    
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dự án mẫu - Login</title>

  <!-- Custom fonts for this template-->
  <link href="resource/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="resource/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Đăng Ký !</h1>
                  </div>
                  <form class="user" action="" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Username..." name="username" required>
                      <label for="">
                        <?= isset($error['username']) ? $error['username'] : '' ?>
                      </label>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Họ Tên..." name="fullname" required>
                      <label for="">
                        <?= isset($error['fullname']) ? $error['fullname'] : '' ?>
                      </label>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" placeholder="Email..." name="email" required>
                      <label for="">
                        <?= isset($error['email']) ? $error['email'] : '' ?>
                      </label>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" required>
                      <label for="">
                        <?= isset($error['password']) ? $error['password'] : '' ?>
                      </label>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Địa chỉ..." name="address" required>
                      <label for="">
                        <?= isset($error['address']) ? $error['address'] : '' ?>
                      </label>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Điện thoại..." name="phone" required>
                      <label for="">
                        <?= isset($error['phone']) ? $error['phone'] : '' ?>
                      </label>
                    </div>
                    <button class="btn btn-primary btn-user btn-block" name="btnsignup">Đăng Ký</button>

                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?php echo ROOT ?>/admin/login.php">Đăng nhập</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="resource/vendor/jquery/jquery.min.js"></script>
  <script src="resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="resource/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="resource/js/sb-admin-2.min.js"></script>

</body>

</html>