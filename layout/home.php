<?php
$product_all = list_limit_product(8);
$top_product = list_top_product();
?>

    <!-- Begin Urani's Content Wrapper Area -->
    <div class="urani-content_wrapper pt--60">
      <div class="container">
        <div class="row">
          <!-- Begin Shopbar With Banner Area -->
          <div class="col-xl-12">
            <div class="shopbar-with_banner">
              <div class="banner-2">
                <a href="#">
                  <img src="assets/img/shop/1.png" alt="Urani's Shop Banner">
                </a>
              </div>
              
              
              <!-- Begin Urani"s Category Product Area -->
              <div class="urani-category-product mt-4 mb-6">
                <div class="container">
                  <div class="row">
                    <div class="urani-category-product_active owl-carousel">
                      <!-- Begin Urani's Category Product Item Area -->
                      <?php foreach ($top_product as $item): ?>
                      <div class="col-lg-12">
                        <div class="urani-category-pro_item bg--light-green">
                          <div class="category-pro-upper_item">
                            <div class="category-pro_img">
                              <h3 class="category-pro_name"><?php echo $item['name'] ?></h3>
                              <a href="<?php echo ROOT?>?page=singer_product&id=<?php echo $item['id'] ?>">
                                <img src="assets/img/product/real/<?php echo $item['image'] ?>" alt="<?php echo $item['name'] ?>">
                              </a>
                            </div>
                          </div>
                          <div class="category-pro-lower_item bg--white mt-4">
                            <div class="btn border border-success">
                              Lượt xem <span class="badge badge-light"><?php echo $item['view'] ?></span>
                          </div>
                          </div>
                        </div>
                      </div>
                      <?php endforeach;?>
                      <!-- Urani's Category Product Item Area End Here -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- Urani"s Category Product Area End Here -->
              <!-- Begin Urani's Banner Wrap Area -->
              <div class="banner-wrap pb--55 pt--55">
                <div class="container mt-6">
                  <div class="row no-gutters">
                    <!-- Begin Banner Area -->
                    <div class="col-lg-6 col-md-6">
                      <div class="banner pb-sm--30 pb-xs--30 pb-xxs--30">
                        <a href="#">
                          <img src="https://photo.pufii.com.tw/K/1127-B.jpg" alt="Urani's Banner">
                        </a>
                      </div>
                    </div>
                    <!-- Banner Area End Here -->
                    <!-- Begin Banner Area -->
                    <div class="col-lg-6 col-md-6">
                      <div class="banner">
                        <a href="#">
                          <img src="https://photo.pufii.com.tw/K/1202-C.jpg" alt="Urani's Banner">
                        </a>
                      </div>
                    </div>
                    <!-- Banner Area End Here -->
                  </div>
                </div>
              </div>
              <!-- Urani's Banner Wrap Area End Here -->

              <!-- Begin Shop Products Wrapper Area -->
              <div class="shop-products-wrapper pt--30 pb--60">
                  <div class="tab-content">
                      <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                        <div class="row">
                        <?php foreach ($product_all as $item): ?>
                          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 pb--30">
                            <!-- Begin Urani's Single Product -->
                            <div class="urani-single_product">
                                <div class="product-img">
                                    <a href="<?php echo ROOT?>?page=singer_product&id=<?php echo $item['id'] ?>">
                                        <img class="primary-img" src="assets/img/product/real/<?php echo $item['image'] ?>" alt="Urani's Product Image">
                                        <img class="secondary-img" src="assets/img/product/real/<?php echo $item['image'] ?>" alt="Urani's Product Image">
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
                                        <h4><a class="product-name" href="<?php echo ROOT?>?page=singer_product&id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></h4>
                                        <div class="price-box pt--5 pb--5">
                                            <span class="new-price">$<?php echo $item['price'] ?></span>
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
              <!-- Shop Products Wrapper Area End Here -->
            </div>
          </div>
          <!-- Shopbar With Banner Area End Here -->
        </div>
      </div>
    </div>
    <!-- Urani's Content Wrapper Area End Here -->


