<?php
session_start();
require_once '../libs/user.php';
require_once '../config/config.php';
//Nếu đã đăng nhập rồi thì check_session
check_session();
extract($_REQUEST);
if (isset($btnlogin)) {
  if (check_user($username)) {
    //Trong trường hợp username tồn tại thì lấy ra dữ liệu
    $user = check_user($username);
    if (password_verify($password, $user['password'])) {
      $_SESSION['user'] = $user;
      if ($_SESSION['user']['role'] == 1000) {
        header('location:' . ROOT . 'admin');
      }
      if ($_SESSION['user']['role'] == 100) {
        header('location:' . ROOT);
      }
    } else {
      $error['password'] = "Mật khẩu không đúng!";
    }
  } else {
    $error['username'] = "Username không đúng";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- fage css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- box icons css -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="root">
            <div class="background"></div>
            <div class="main-left">
                <form action="" class="form login">
                    <h2>Login</h2>
                    <i class='bx bx-user'></i>
                    <input class="form-controls" type="text" placeholder="Email" name="username">
                    <label for="">
                        <?= isset($error['username']) ? $error['username'] : '' ?>
                    </label>
                    <i class='bx bx-key'></i>
                    <input class="form-controls" type="password" placeholder="Passwoord" name="password">
                    <label for="">
                        <?= isset($error['password']) ? $error['password'] : '' ?>
                    </label>
                    <button class="form-controls" name="btnlogin">Login</button>
                    <div class="link">
                        <span>Don't have account ? <a href="#" onclick="toggle()">Register</a></span>
                    </div>
                </form>
            </div>
            <div class="main-right">
                <form action="" class="form register">
                    <h2>Register</h2>
                    <input class="form-controls" type="text" placeholder="Email">
                    <input class="form-controls" type="password" placeholder="Passwoord">
                    <input class="form-controls" type="password" placeholder="Re_Passwoord">
                    <button class="form-controls">Register</button>
                    <div class="link">
                        <span>if you have account ? <a href="#" onclick="toggle()">Login</a></span>
                    </div>
                </form>
            </div>
            <div class="content">
                <h2>Hello</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nam, voluptates commodi tenetur enim saepe vero praesentium eius vel adipisci nihil aperiam repellat minima, sint aliquid officiis corporis. Sit, quo.</p>
            </div>
            <img class="image-login" src="<?= ROOT ?>/assets/img/form.svg">
            <img class="image-register" src="<?= ROOT ?>/assets/img/form2.svg">
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
  </body>
</html>
