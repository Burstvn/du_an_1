<?php 
session_start();
require_once "../libs/product.php";
require_once '../config/config.php';
require_once '../libs/user.php';
//Nếu đã đăng nhập rồi thì check_session
extract($_REQUEST);
if (isset($btndangnhap)) {
    if (check_user($username)) {
        //Trong trường hợp username tồn tại thì lấy ra dữ liệu
        $user = check_user($username);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header('location:' . $_SERVER['REQUEST_URI']);
        } else {
            $error['password'] = "Mật khẩu không đúng!";
        }
    } else {
        $error['username'] = "Username không đúng";
    }
}
include_once "header.php" ?>
<?php
    $search = search_product($keyword);
    if($search){
?>
    <div class="shop-products-wrapper pt--30 pb--60">
                  <div class="tab-content">
                      <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                        <div class="row">
                        <?php foreach ($search as $item): ?>
                          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 pb--30">
                            <!-- Begin Urani's Single Product -->
                            <div class="urani-single_product">
                                <div class="product-img">
                                    <a href="<?php echo ROOT?>?page=singer_product&id=<?php echo $item['id_product'] ?>">
                                        <img class="primary-img" src="<?php echo ROOT ?>assets/img/product/real/<?php echo $item['image_product'] ?>" alt="Urani's Product Image">
                                        <img class="secondary-img" src="<?php echo ROOT ?>assets/img/product/real/<?php echo $item['image_product'] ?>" alt="Urani's Product Image">
                                    </a>
                                </div>
                                <div class="urani-product_content pt--20">
                                    <div class="product-desc_info pb--15">
                                      <div class="rating-box pb--5">
                                          <ul>
                                              <li><i class="fa fa-star-o"></i></li>
                                              <li><i class="fa fa-star-o"></i></li>
                                              <li><i class="fa fa-star-o"></i></li>
                                              <li><i class="fa fa-star-o"></i></li>
                                              <li class="no-star"><i class="fa fa-star-o"></i></li>
                                          </ul>
                                      </div>
                                        <h4><a class="product-name" href="<?php echo ROOT?>?page=singer_product&id=<?php echo $item['id_product'] ?>"><?php echo $item['name_product'] ?></a></h4>
                                        <div class="price-box pt--5 pb--5">
                                            <span class="new-price">$ <?php echo $item['price_product'] ?></span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="urani-add_cart" href="cart.html"><i class="icon_cart_alt"></i>Add to cart</a></li>
                                            <li><a class="urani-wishlist_link" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a class="urani-compare_link" href="compare.html"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Urani's Single Product Area End Here -->
                          </div>
                        <?php endforeach;?>
                        </div>
                      </div>
                  </div>
              </div>
<?php
    }else{
        echo '<div class="alert alert-danger p-4 mt-3" role="alert">
        Không tìm thấy sản phẩm nào !
      </div>';
    }
?>
<?php include_once "footer.php" ?>
