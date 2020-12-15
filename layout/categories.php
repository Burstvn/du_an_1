<?php
$product_categories = list_product_categories($id);
?>


              <!-- Begin Shop Products Wrapper Area -->
              <div class="shop-products-wrapper pt--30 pb--60">
                  <div class="tab-content">
                      <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                        <div class="row">
                        <?php foreach ($product_categories as $item): ?>
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


