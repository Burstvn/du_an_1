<?php
ob_start();
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
if (isset($_POST['btnComment'])) {
    insert_comment($id, $_SESSION['user']['id'], $content);
    echo '<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>';
}
update_view_product($id);

?>
    <!-- Begin Urani's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Sản phẩm</a></li>
                    <li class="active"><?php echo $product['name'];?></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Urani's Breadcrumb Area End Here -->

    <!-- Begin Urani's Single Product Area -->
    <div class="sp-area pt--60 pb--60">
        <div class="container">
            <div class="sp-nav">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-lg-5 col-md-5">
                      <div class="sp-images">
                          <div class="sp-largeimages sp-imagezoom">
                              <div class="sp-singleimage" data-src="assets/img/product/real/<?php echo $product['image'] ?>">
                                  <img src="assets/img/product/real/<?php echo $product['image'] ?>" alt="<?php echo $product['name'];?> Image">
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                      <div class="sp-content pt-sm--50 pt-xs--50 pt-xxs--50">
                        <div class="sp-heading pb--10">
                          <h2><a href="#"><?php echo $product['name'];?></a></h2>
                        </div>
                        <div class="price-box pb--20">
                          <span class="new-price"> $ <?php echo $product['price'];?></span>
                        </div>
                        <div class="sp-information pb--25">
                          <div class="product-attribute">
                            <strong> <?php if($product['cate_id']==1){echo 'MEN & WOMEN';}else if($product['cate_id']==2){
                              echo 'MEN';
                            }else{echo 'WOMEN';};?></strong>
                            <span><?php if($product['status']==1){echo 'Còn hàng';}else{echo 'Hết hàng';} ;?></span>
                          </div>
                        </div>
                        <div class="qty-details pb--30">
                        <form action="cart-update.php" method="post">
                          <label class="label">Qty: </label>
                          <input type="hidden" name="type" value="add" />
                          <input type="hidden" name="name" value="<?php echo $product['name'] ?>">
                          <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                          <input type="hidden" name="price" value="<?php echo $product['price'] ?>">
                          <input type="hidden" name="return_url" value="<?php echo $current_url ?>" />
                          <input type="number" class="quantity-input" name="qty" value="1" min="1">
                          <button type="submit" class="urani-qty_btn"><i class="icon_cart_alt"></i>Add To Cart</button>
                        </form>
                        </div>
                        <div id="details" class="tab-pane" role="tabpanel">
                            <div class="sp-description mt-2">
                            <?php echo $product['description'];?>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Urani's Single Product Area End Here -->

    <!-- Begin Urani's Single Product Tab Area -->
    <div class="sp-tab_area pb--60">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="sp-tab">
                    <ul class="nav sp-tab_menu pb--10">
                       <li><a class="active" data-toggle="tab" href="#details"><span>Bình luận</span></a></li>
                    </ul>
                </div>
                <div class="tab-content">
                  <div id="review" class="tab-pane active show" role="tabpanel">
                    <div class="customer-review_area">
                      <div class="our-feedback">
                        <div class="feedback">
                        <!-- binh luan start -->
                        <div class="comment">
                            <ul>
                                <?php
                                $comments = list_comment_product($id);
                                ?>
                                <?php foreach ($comments as $c) : ?>
                                    <div class="card">
                                    <div class="card-body alert alert-primary">
                                        <h5 class="card-title text-danger"><?= $c['username'] ?></h5>
                                        <h6 class="card-subtitle mb-2 text-muted" style="font-size:13px;"><?= $c['created_comment'] ?></h6>
                                        <p class="card-text border border-success rounded p-2"><?= $c['content'] ?> </p>
                                    </div>
                                    </div>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php if (check_account()) : ?>
                        <div class="form-comment mt-4">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <textarea  name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button type="submit" name="btnComment" class="btn btn-primary">Bình luận</button>
                            </form>
                        </div>
                        <?php else : ?>
                            <p>
                                <b>Bạn cần đăng nhập mới có thể bình luận</b>
                            </p>
                        <?php endif; ?>
                        <!-- binh luan end -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- Urani's Single Product Tab Area End Here -->
<?php
    ob_flush();
?>