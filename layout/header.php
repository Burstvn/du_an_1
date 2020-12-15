
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/urani-v4/urani/shop-3-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Oct 2020 01:28:17 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="meta description">
  <!-- Favicons -->
  <link rel="shortcut icon" href="<?php echo ROOT ?>/assets/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo ROOT ?>/assets/img/icon.png">

  <title><?= isset($title) ? $title : '' ?></title>
  <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/vendor.css">
  <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/main.css">
  <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/cart.css">
  <![endif]-->
</head>

<body>

  <!-- Begin Body Wrapper Area -->
  <div class="wrapper">

    <!-- Begin Urani's Header Area -->
    <header>
      <!-- Begin Header To Area -->
      <div class="header-top bg--blue">
        <div class="container">
          <div class="row">
            <!-- Begin Header Contact Information Area -->
            <div class="col-xl-6 col-lg-7">
              <div class="header-contact-info color--white">
                <div class="ht-icon">
                  <ul>
                    <li><a href="#"><i class="fa fa-envelope-open"></i></a></li>
                    <li><a href="#"><i class="fa fa-phone"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Header Contact Information Area End Here -->
            <!-- Begin Header Top Right Area -->
            <div class="col-xl-6 col-lg-5">
              <div class="header-top_right">
                <div class="ht-menu ht-icon float-right">
                  <nav>
                    <ul>
                        <?php if (!check_account()) : ?>
                          <a href="<?php echo ROOT,'admin/login.php' ?>"class="list-group-item list-group-item-action list-group-item-primary">Login</a>
                        <?php else : ?>
                          <div class="alert alert-warning mt-2" role="alert">
                          <label for=""> Xin chào : <h5 class='text-danger' style="display: contents;"><?= $_SESSION['user']['username'] ?></h5> </label>
                                <a href="<?= ROOT ?>?page=logout">Thoát</a>
                          </div>
                                
                        <?php endif; ?>
                    </ul>
                  </nav>
              </div>
              </div>
            </div>
            <!-- Header Top Right Area End Here -->
          </div>
        </div>
      </div>
      <!-- Header To Area End Here -->
      <!-- Begin Header Middle Area -->
      <div class="header-middle bg--bondi_blue ptb--30">
        <div class="container">
          <div class="row">
            <!-- Begin Header Middle Logo Area -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="hm-logo pb-sm--15">
                <a href="<?php echo ROOT ?>">
                  <img src="<?php echo ROOT ?>/assets/img/menu/logo/1.png" style="max-width: 80%">
                </a>
              </div>
            </div>
            <!-- Header Middle Logo Area End Here -->
            <!-- Begin Header Middle Search Area -->
            <div class="col-lg-6 col-md-6 d-none d-md-block d-lg-block">
              <div class="hm-search_wrap mt--15 mb-xxs--15">
                <form action="<?php echo ROOT.'layout/search.php' ?>" method="GET" class="hm-searchbox">
                    <input type="text" name="keyword" placeholder="Nhập tên sản phẩm cần tìm...">
                    <button class="search_btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
            </div>
            <!-- Header Middle Search Area End Here -->
            <!-- Begin Header Middle Right Area -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="hm-right ht-icon pt-xs--15 pt-xxs--15">
                <ul>
                  <li style="position: relative; display: flex; justify-content: center;">
                    <a class="cart-btn" href="#">
                    <span class="item-counter">0</span>
                    <i class="icon_cart_alt"></i>
                    </a>
                    <!-- View Cart Box Start -->
                    <?php
                    if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
                    {
                      echo '<div class="cart-view-table-front" id="view-cart">';
                      echo '<h3>Your Shopping Cart</h3>';
                      echo '<form method="post" action="cart-update.php">';
                      echo '<table width="100%"  cellpadding="6" cellspacing="0">';
                      echo '<tbody>';

                      $total =0;
                      $b = 0;
                      foreach ($_SESSION["cart_products"] as $cart_itm)
                      {
                        $product_name = $cart_itm["name"];
                        $product_qty = $cart_itm["qty"];
                        $product_price = $cart_itm["price"];
                        $product_code = $cart_itm["id"];
                        $bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
                        echo '<tr class="list-cart '.$bg_color.'">';
                        echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
                        echo '<td>'.$product_name.'</td>';
                        echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
                        echo '</tr>';
                        $subtotal = ($product_price * $product_qty);
                        $total = ($total + $subtotal);
                      }
                      echo '<td colspan="4">';
                      echo '<button type="submit">Update</button><a href="?page=cart" class="button">Checkout</a>';
                      echo '</td>';
                      echo '</tbody>';
                      echo '</table>';
                      
                      $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                      echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
                      echo '</form>';
                      echo '</div>';

                    }
                    ?>
                    <!-- Urani's Minicart Area End Here -->
                  </li>
                </ul>
              </div>
              <a href="#" class="menu-btn color--white">
                  <i class="fa fa-bars"></i>
              </a>
            </div>
            <!-- Header Middle Right Area End Here -->
          </div>
        </div>
      </div>
      <!-- Header Middle Area End Here -->
      <!-- Begin Header Bottom Area -->
      <div class="header-bottom bg--Cerulean header-sticky stick d-none d-lg-block">
        <div class="container">
          <div class="row">
            <!-- Begin Header Bottom Menu Area -->
            <div class="col-lg-12">
              <div class="hb-menu">
                <nav>
                  <ul>
                        <li class="menu-item-has-children">
                            <a href="<?php echo ROOT ?>">
                                <span class="mm-text">Home</span>
                            </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo ROOT ?>?page=category&id=1">
                                <span class="mm-text">NEWS</span>
                            </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo ROOT ?>?page=category&id=2">
                                <span class="mm-text">MEN</span>
                            </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo ROOT ?>?page=category&id=3">
                                <span class="mm-text">WOMEN</span>
                            </a>
                        </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- Header Bottom Menu Area End Here -->
          </div>
        </div>
      </div>
      <!-- Header Bottom Area End Here -->
      <!-- Begin Urani's Offcanvas Area -->
      <div class="offcanvas-menu-wrapper" id="offcanvasMenu">
          <div class="offcanvas-menu-inner">
              <div class="container">
                <a href="#" class="btn-close"><span class="fa fa-close"></span></a>
                <!-- Begin Header Middle Logo Area -->
                <div class="hm-logo text-center ptb--30">
                  <a href="index.html">
                    <img src="assets/img/menu/logo/1.png" alt="">
                  </a>
                </div>
                <!-- Header Middle Logo Area End Here -->
                <!-- Begin Offcanvas Search Area -->
                <div class="hm-search_wrap offcanvas-search pb--30">
                  <form action="#" class="hm-searchbox">
                      <input type="text" placeholder="Search for item...">
                      <button class="search_btn" type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
                <!-- Offcanvas Search Area End Here -->
                <!-- Begin Header Top Menu Area -->
                <div class="ht-menu offcanvas-ht_menu ht-icon">
                  <nav>
                    <ul>
                      <li><a href="login-register.html"><i class="fa fa-user"></i></a></li>
                      <li><a href="#">USD</a>
                        <ul class="ht-dropdown">
                          <li><a href="#">EUR</a></li>
                          <li><a href="#">LEU</a></li>
                          <li><a href="#">YEN</a></li>
                        </ul>
                      </li>
                      <li><a href="#">En1</a>
                        <ul class="ht-dropdown currency">
                          <li><a href="#">En2</a></li>
                          <li><a href="#">En3</a></li>
                          <li><a href="#">En4</a></li>
                          <li><a href="#">En5</a></li>
                          <li><a href="#">En6</a></li>
                        </ul>
                      </li>
                    </ul>
                  </nav>
                </div>
                <!-- Header Top Menu Area End Here -->
                <!-- Begin Offcanvas Navigation Area -->
                <nav class="offcanvas-navigation">
                    <ul class="offcanvas-menu">
                        <li class="menu-item-has-children active"><a href="<?php echo ROOT ?>"><span class="mm-text">Home</span></a></li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo ROOT ?>">
                                <span class="mm-text">Apple</span>
                            </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo ROOT ?>">
                                <span class="mm-text">Oppo</span>
                            </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo ROOT ?>">
                                <span class="mm-text">SamSung</span>
                            </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo ROOT ?>">
                                <span class="mm-text">Huawei</span>
                            </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo ROOT ?>">
                                <span class="mm-text">One Plus</span>
                            </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo ROOT ?>">
                                <span class="mm-text">Lg elictric</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Offcanvas Navigation Area End Here -->
              </div>
          </div>
      </div>
      
      <!-- Urani's Offcanvas Area End Here -->
    </header>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - Shop online</title>
    <link rel="stylesheet" href="layout/css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <h2>SHOP ONLINE</h2>
            </div>
            <div class="search">
                <form action="">
                    <input type="search" name="keyword" id="" placeholder="iphone">
                    <button>Tìm kiếm</button>
                </form>
            </div>
        </header> -->