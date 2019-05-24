<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . ' woocommerce woocommerce-page',
  'title' => array(
    'Premium Collection',
    'text-white text-left',
    'background-image: url(https://via.placeholder.com/1920x500/000000/111111)',
  ),
  'scripts' => array(
    'jquery-ui-core',
    'jquery-ui-widget',
    'jquery-ui-mouse',
    'jquery-ui-slider'
  ),
  'styles' => array(
    'jquery-ui'
  )
);
get_header($config);
?>
<div class="content-wrapper">

  <?php get_page_title($config); ?>

  <div class="container main-wrapper clearfix">
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widget-list row">

      <main class="col-lg-8 main-content clearfix" role="main">

        <p class="woocommerce-result-count">Showing 1–9 of 10 results</p>

        <form class="woocommerce-ordering">
          <select name="orderby" class="orderby">
  					<option value="popularity" selected="selected">Sort by popularity</option>
  					<option value="rating">Sort by average rating</option>
  					<option value="date">Sort by latest</option>
  					<option value="price">Sort by price: low to high</option>
  					<option value="price-desc">Sort by price: high to low</option>
          </select>
        </form>

        <ul class="products columns-3 clearfix">

          <li class="product first">
            <div class="product-image-container">
              <span class="onsale">Sale!</span>

              <a href="shop-single.php">
                <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="" />
              </a>

              <a href="#" class="button add_to_cart_button">
                Add to cart
              </a>
            </div><!-- /.product-image-container -->

            <a href="shop-single.php" class="woocommerce-LoopProduct-link">
              <h5 class="woocommerce-loop-product__title">Eco Yoga Mat</h5>

              <span class="price">
                <del>
                  <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">$</span>44.00
                  </span>
                </del>
                <ins>
                  <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">$</span>38.00
                  </span>
                </ins>
              </span>

              <div class="star-rating">
                <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span>
              </div>
            </a>
          </li><!-- /.product -->

          <li class="product">
            <div class="product-image-container">
              <a href="shop-single.php">
                <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="" />
              </a>

              <a href="#" class="button add_to_cart_button">
                Add to cart
              </a>
            </div><!-- /.product-image-container -->

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
                <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="" />
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
          </li><!-- /.product -->

          <li class="product first">
            <div class="product-image-container">
              <span class="onsale">Sale!</span>

              <a href="shop-single.php">
                <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="" />
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
          </li><!-- /.product -->

          <li class="product">
            <div class="product-image-container">
              <a href="shop-single.php">
                <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="" />
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
          </li><!-- /.product -->

          <li class="product">
            <div class="product-image-container">
              <a href="shop-single.php">
                <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="" />
              </a>

              <a href="#" class="button add_to_cart_button">
                Add to cart
              </a>
            </div><!-- /.product-image-container -->

            <a href="shop-single.php" class="woocommerce-LoopProduct-link">
              <h5 class="woocommerce-loop-product__title">Face Moisturizer</h5>

              <span class="price">
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>48.00
                </span>
              </span>
            </a>
          </li><!-- /.product -->

          <li class="product first">
            <div class="product-image-container">
              <span class="onsale">Sale!</span>

              <a href="shop-single.php">
                <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="" />
              </a>

              <a href="#" class="button add_to_cart_button">
                Add to cart
              </a>
            </div><!-- /.product-image-container -->

            <a href="shop-single.php" class="woocommerce-LoopProduct-link">
              <h5 class="woocommerce-loop-product__title">Yoga Towel</h5>

              <span class="price">
                <del>
                  <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">$</span>14.50
                  </span>
                </del>
                <ins>
                  <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">$</span>18.00
                  </span>
                </ins>
              </span>

              <div class="star-rating">
                <span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
              </div>
            </a>
          </li><!-- /.product -->

          <li class="product">
            <div class="product-image-container">
              <a href="shop-single.php">
                <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="" />
              </a>

              <a href="#" class="button add_to_cart_button">
                Add to cart
              </a>
            </div><!-- /.product-image-container -->

            <a href="shop-single.php" class="woocommerce-LoopProduct-link">
              <h5 class="woocommerce-loop-product__title">Dumbbells Set</h5>

              <span class="price">
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>16.00
                </span>
              </span>
            </a>
          </li><!-- /.product -->

          <li class="product">
            <div class="product-image-container">
              <a href="shop-single.php">
                <img src="https://via.placeholder.com/500" class="size-woocommerce_thumbnail" alt="" />
              </a>

              <a href="#" class="button add_to_cart_button">
                Add to cart
              </a>
            </div><!-- /.product-image-container -->

            <a href="shop-single.php" class="woocommerce-LoopProduct-link">
              <h5 class="woocommerce-loop-product__title">Cleansing Oils</h5>

              <span class="price">
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>27.00
                </span>
              </span>
            </a>
          </li><!-- /.product -->

        </ul><!-- /.products -->

        <nav class="site-pagination">
          <ul class="pager list-unstyled">
            <li class="current">1</li>
            <li><a href="blog.php">2</a></li>
            <li><a href="blog.php">3</a></li>
            <li><a href="blog.php"><i class="feather-chevron-right"></i></a></li>
          </ul>
        </nav><!-- /.site-pagination -->

      </main><!-- /.main-content -->

      <aside class="col-lg-4 px-lg-5 sidebar widget-area clearfix" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">

        <section class="widget woocommerce widget_product_search">
          <form role="search" method="get" class="woocommerce-product-search">
          	<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
          	<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products…" value="" name="s">
          	<button type="submit" value="Search">Search</button>
          </form>
        </section>

        <section class="widget woocommerce widget_price_filter">
          <h6 class="widget-title">Filter by price</h6>

          <form>
      			<div class="price_slider_wrapper">
      				<div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                    data-plugin-options='{"min": 0, "max": 100, "values": [0, 75]}'>
              </div>

      				<div class="price_slider_amount">
      					<input type="text" id="min_price" name="min_price" value="0" data-min="0" placeholder="Min price" style="display: none;">
      					<input type="text" id="max_price" name="max_price" value="75" data-max="100" placeholder="Max price" style="display: none;">
      					<button type="submit" class="button">Filter</button>
      					<div class="price_label">
      						Price: $<span class="from">0</span> — $<span class="to">75</span>
      					</div>

      					<div class="clear"></div>
      				</div>
      			</div>
        	</form>
        </section>

        <section class="widget woocommerce widget_product_tag_cloud">
          <h6 class="widget-title">Product tags</h6>

          <div class="tagcloud">
            <a href="#" class="tag-cloud-link" style="font-size: 8pt;">eight</a>
            <a href="#" class="tag-cloud-link" style="font-size: 8pt;">eleventh</a>
            <a href="#" class="tag-cloud-link" style="font-size: 8pt;">fifth</a>
            <a href="#" class="tag-cloud-link" style="font-size: 8pt;">first</a>
            <a href="#" class="tag-cloud-link" style="font-size: 8pt;">fourth</a>
            <a href="#" class="tag-cloud-link" style="font-size: 8pt;">ninth</a>
            <a href="#" class="tag-cloud-link" style="font-size: 8pt;">second</a>
            <a href="#" class="tag-cloud-link" style="font-size: 8pt;">seventh</a>
            <a href="#" class="tag-cloud-link" style="font-size: 8pt;">sixth</a>
            <a href="#" class="tag-cloud-link" style="font-size: 8pt;">tenth</a>
            <a href="#" class="tag-cloud-link" style="font-size: 8pt;">third</a>
            <a href="#" class="tag-cloud-link" style="font-size: 8pt;">twelvthe</a>
          </div>
        </section>

        <section class="widget woocommerce widget_products">
          <h6 class="widget-title">Products</h6>

          <ul class="product_list_widget">
            <li>
            	<a href="shop-single.php">
            		<img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="https://via.placeholder.com/60" width="60" height="60" alt="" />
                <span class="product-title">Eco Yoga Mat</span>
            	</a>

              <div class="star-rating">
                <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span>
              </div>

              <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>44.00</span></del>
              <ins>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>38.00
                </span>
              </ins>
            </li>

            <li>
            	<a href="shop-single.php">
            		<img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="https://via.placeholder.com/60" height="60" width="60" alt="" />
                <span class="product-title">Eco 500ml Bottle</span>
            	</a>

              <div class="star-rating">
                <span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
              </div>

              <span class="woocommerce-Price-amount amount">
                <span class="woocommerce-Price-currencySymbol">$</span>27.00
              </span>
          	</li>

            <li>
            	<a href="shop-single.php">
            		<img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="https://via.placeholder.com/60" width="60" height="60" alt="" />
                <span class="product-title">Facial Oils</span>
            	</a>

            	<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>48.00</span></del>
              <ins>
                <span class="woocommerce-Price-amount amount">
                  <span class="woocommerce-Price-currencySymbol">$</span>38.00
                </span>
              </ins>
            </li>

            <li>
            	<a href="shop-single.php">
            		<img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="https://via.placeholder.com/60" width="250" height="250" alt="" />
                <span class="product-title">Face Moisturizer</span>
            	</a>

            	<span class="woocommerce-Price-amount amount">
                <span class="woocommerce-Price-currencySymbol">$</span>48.00
              </span>
            </li>
          </ul><!-- /.product_list_widget -->
        </section>

      </aside><!-- /.sidebar -->

    </div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>

</div><!-- /.content-wrapper -->
<?php get_footer();
