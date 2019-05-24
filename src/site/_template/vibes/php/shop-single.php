<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . ' single single-product woocommerce woocommerce-page',
  'title' => 'Eco Yoga Mat',
  'scripts' => array(
    'spinner'
  ),
  'styles' => array(
  )
);
get_header($config);
?>
<div class="content-wrapper">

  <?php get_page_title_alt($config); ?>

  <main class="container main-wrapper clearfix">
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widget-list row">

      <main class="col-lg-12 main-content clearfix p-0" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

        <div class="product instock sale featured product-type-simple">
          <span class="onsale" style="display: none;">Sale!</span>

          <div class="container">
            <div class="row">

              <div class="col-md-6 woocommerce-product-gallery images">
              	<figure class="woocommerce-product-gallery__wrapper">
              		<div class="woocommerce-product-gallery__image">
                    <a href="assets/demo/shop/12.jpg">
                      <img width="500" height="500" src="https://via.placeholder.com/500" class="wp-post-image" alt="" />
                    </a>
                  </div>
                </figure>
              </div>

            	<div class="col-md-5 summary entry-summary">
                <div class="woocommerce-product-rating">
                  <div class="star-rating">
                    <span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating
                    </span>
                  </div>
                  <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">1</span> customer review)</a>
                </div><!-- /.woocommerce-product-rating -->

            		<h1 class="product_title entry-title">Eco Yoga Mat</h1>

                <p class="price">
                  <del>
                    <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">&#36;</span>44.00
                    </span>
                  </del>
                  <ins>
                    <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">&#36;</span>38.00
                    </span>
                  </ins>
                </p>

                <div class="woocommerce-product-details__short-description">
                	<p>Our most popular mat, the Eco Yoga Mat is a provides good traction and cushion while still providing stability for standing poses. Cras dapibus eleifend nunc vitae sollicitudin. Pellentesque eu nisl sem.</p>
                </div>

              	<form class="cart">
                	<div class="quantity" data-trigger="spinner">
                		<label class="screen-reader-text" for="quantity_5c39c91d715eb">Quantity</label>
                		<input
                      data-rule="quantity"
                			type="text"

                			id="quantity_5c39c91d715eb"
                			class="input-text qty text"
                			step="1"
                			min="1"
                			max=""
                			name="quantity"
                			value="1"
                			title="Qty"
                			size="4"
                			pattern="[0-9]*"
                			inputmode="numeric"
                			aria-labelledby="Cap quantity" />

                      <button type="button" class="quantity-btn btn-up" data-spin="up">
                        <i class="feather-plus"></i>
                      </button>

                      <button type="button" class="quantity-btn btn-down" data-spin="down">
                        <i class="feather-minus"></i>
                      </button>
                	</div>

              		<button type="submit" class="single_add_to_cart_button button alt">
                    Add to cart
                  </button>
            		</form><!-- /.cart -->

                <div class="product_meta">
                	<span class="sku_wrapper">SKU: <span class="sku">woocap9876</span></span>
                	<span class="posted_in">Category: <a href="#" rel="tag">Accessories</a></span>
                </div>
            	</div><!-- /.entry-summary -->

            </div><!-- /.row -->
          </div><!-- /.container -->

          <div class="woocommerce-tabs wc-tabs-wrapper">
            <ul class="tabs wc-tabs" role="tablist">
              <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                <a href="#tab-description">Description</a>
              </li>

              <li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                <a href="#tab-additional_information">Additional information</a>
              </li>

              <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                <a href="#tab-reviews">Reviews (2)</a>
              </li>
            </ul>

            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
              <div class="row">
                <div class="col-md-8 offset-md-2">

                  <h2>Description</h2>
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc rutrum tortor id lectus consectetur, non consequat magna dictum. Cras dapibus eleifend nunc vitae sollicitudin. Pellentesque eu nisl sem. Sed laoreet ligula tellus, ac consectetur quam feugiat vel. Integer nisl justo, posuere non placerat in, ultrices ac mauris. Nulla facilisi. Pellentesque facilisis pellentesque vehicula. Sed libero sapien, ornare ac imperdiet sit amet, dictum eu elit.</p>

                </div>
              </div>
            </div>

            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">
              <div class="row">
                <div class="col-md-8 offset-md-2">

                  <h2>Additional information</h2>

                  <table class="shop_attributes">
                    <tbody>
                      <tr>
                        <th>Weight</th>
                      	<td class="product_weight">10 kg</td>
                      </tr>

                    	<tr>
                    		<th>Dimensions</th>
                    		<td class="product_dimensions">15 x 70 x 80 cm</td>
                    	</tr>

                    	<tr>
                        <th>Color</th>
                        <td><p>Black, Brown, Red, White</p></td>
                    	</tr>

                      <tr>
                    		<th>Size</th>
                    		<td><p>Large, Medium, Small</p></td>
                    	</tr>
                    </tbody>
                  </table>

                </div><!-- /.col-md-8 -->
              </div><!-- /.row -->
            </div><!-- /.wc-tab -->

            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
              <div class="row">
                <div class="col-md-8 offset-md-2">

                  <div id="reviews" class="woocommerce-Reviews">
                    <div id="comments">
                      <h2 class="woocommerce-Reviews-title">2 reviews for <span>Eco Yoga Mat</span></h2>

                      <ol class="commentlist">
                        <li class="review">
                          <div class="comment_container">
                            <img alt="" src="assets/img/default-avatar.jpg" class="avatar avatar-60 photo" height="60" width="60">

                            <div class="comment-text">
                              <div class="star-rating">
                                <span style="width:100%">
                                  Rated <strong class="rating">5</strong> out of 5
                                </span>
                              </div>

                              <p class="meta">
                                <strong class="woocommerce-review__author">Marsha Hoffman</strong>
                                <span class="woocommerce-review__dash">–</span> <time class="woocommerce-review__published-date" datetime="2019-01-01T12:44:58+00:00">January 1, 2019</time>
                              </p>

                              <div class="description">
                                <p>Nam odio ante, lacinia quis dui nec, consectetur tincidunt tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis metus lorem, commodo non dolor ut, interdum consequat nibh.</p>
                              </div>
                            </div><!-- /.comment-text -->
                          </div><!-- /.comment_container -->
                        </li><!-- /.review -->

                        <li class="review">
                          <div class="comment_container">
                            <img alt="" src="assets/img/default-avatar.jpg" class="avatar avatar-60 photo" height="60" width="60">

                            <div class="comment-text">
                              <div class="star-rating">
                                <span style="width:80%">
                                  Rated <strong class="rating">4</strong> out of 5
                                </span>
                              </div>

                              <p class="meta">
                                <strong class="woocommerce-review__author">Sylvia Harvey</strong>
                                <span class="woocommerce-review__dash">–</span> <time class="woocommerce-review__published-date" datetime="2019-01-01T12:44:58+00:00">December 28, 2018</time>
                              </p>

                              <div class="description">
                                <p>Proin vulputate, lorem vel scelerisque tristique, ipsum sapien placerat lacus, id finibus urna justo quis orci. Fusce auctor leo et erat eleifend bibendum. Integer placerat, est et venenatis feugiat</p>
                              </div>
                            </div><!-- /.comment-text -->
                          </div><!-- /.comment_container -->
                        </li><!-- /.review -->

                      </ol><!-- /.commentlist -->
                    </div><!-- /#comments -->

                    <div id="review_form_wrapper">
                      <div id="review_form">
                        <div id="respond" class="comment-respond">
                          <span id="reply-title" class="comment-reply-title">
                            Add a review
                            <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></small>
                          </span>

                          <form class="comment-form">
                            <p class="comment-notes">
                              <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                            </p>

                            <div class="comment-form-rating">
                              <label>Your rating</label>

                              <p class="stars">
                                <span>
                                  <a class="star-1" href="#">1</a>
                                  <a class="star-2" href="#">2</a>
                                  <a class="star-3" href="#">3</a>
                                  <a class="star-4" href="#">4</a>
                                  <a class="star-5" href="#">5</a>
                                </span>
                              </p>
                            </div><!-- /.comment-form-rating -->

                            <p class="comment-form-comment">
                              <label>Your review&nbsp;<span class="required">*</span></label>
                              <textarea cols="45" rows="5" required></textarea>
                            </p>

                            <p class="comment-form-author">
                              <label>Name&nbsp;<span class="required">*</span></label>
                              <input type="text" value="" size="30" required />
                            </p>

                            <p class="comment-form-email">
                              <label>Email&nbsp;<span class="required">*</span></label>
                              <input type="email" value="" size="30" required />
                            </p>

                            <p class="form-submit">
                              <input type="submit" class="submit" value="Submit" />
                            </p>
                          </form><!-- /.comment-form -->
                        </div><!-- /#respond -->
                      </div><!-- /#review-form -->
                    </div><!-- /#review_form_wrapper -->

                    <div class="clear"></div>
                  </div><!-- /.commerce-Reviews -->

                </div><!-- /.col-md-8 -->
              </div><!-- /.row -->
            </div><!-- /.wc-tab -->
          </div><!-- /.woocommerce-tabs -->

          <section class="related products">
          	<h2>Related products</h2>

            <ul class="products columns-4">
          		<li class="product first">
                <div class="product-image-container">
                  <a href="shop-single.php">
                    <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="">
                  </a>

                  <a href="#" class="button add_to_cart_button">
                    Add to cart
                  </a>
                </div>

                <a href="shop-single.php" class="woocommerce-LoopProduct-link">
                  <h5 class="woocommerce-loop-product__title">Eco 500ml Bottle</h5>

                  <span class="price">
                    <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">$</span>27.00
                    </span>
                  </span>
                </a>
              </li><!-- /.product -->

              <li class="product">
                <div class="product-image-container">
                  <span class="onsale">Sale!</span>

                  <a href="shop-single.php">
                    <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="">
                  </a>

                  <a href="#" class="button add_to_cart_button">
                    Add to cart
                  </a>
                </div><!-- /.product-image-container -->

                <a href="shop-single.php" class="woocommerce-LoopProduct-link">
                  <h5 class="woocommerce-loop-product__title">Facial Oils</h5>

                  <span class="price">
                    <del>
                      <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>48.00
                      </span>
                    </del>
                    <ins>
                      <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>38.00
                      </span>
                    </ins>
                  </span>
                </a>
              </li>

              <li class="product">
                <div class="product-image-container">
                  <span class="onsale">Sale!</span>

                  <a href="shop-single.php">
                    <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="">
                  </a>

                  <a href="#" class="button add_to_cart_button">
                    Add to cart
                  </a>
                </div><!-- /.product-image-container -->

                <a href="shop-single.php" class="woocommerce-LoopProduct-link">
                  <h5 class="woocommerce-loop-product__title">Hydrating Cleansing Oils</h5>

                  <span class="price">
                    <del>
                      <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>48.00
                      </span>
                    </del>
                    <ins>
                      <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>38.00
                      </span>
                    </ins>
                  </span>
                </a>
              </li>

              <li class="product last">
                <div class="product-image-container">
                  <a href="shop-single.php">
                    <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="">
                  </a>

                  <a href="#" class="button add_to_cart_button">
                    Add to cart
                  </a>
                </div><!-- /.product-image-container -->

                <a href="shop-single.php" class="woocommerce-LoopProduct-link">
                  <h5 class="woocommerce-loop-product__title">Yoga Bag</h5>

                  <div class="star-rating">
                    <span style="width:40%">Rated <strong class="rating">2.00</strong> out of 5</span>
                  </div>
                </a>
              </li>
            </ul><!-- /.products -->
          </section><!-- /.related.products -->
        </div><!-- /.product -->

      </main><!-- /.main-content -->
    </div><!-- /.widget-list -->
  </main><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>

</div><!-- /.content-wrapper -->
<?php get_footer();
