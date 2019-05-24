<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . ' page woocommerce-cart woocommerce-page',
  'title' => array(
    'Shopping Cart',
    'text-white text-left',
    'background-image: url(https://via.placeholder.com/1920x500/000000/111111)',
  ),
  'scripts' => array(
    'spinner'
  ),
  'styles' => array(
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
      <main class="col-lg-12 main-content clearfix" role="main">

        <article class="page type-page">
          <div class="entry-content">
            <div class="woocommerce">

              <form class="woocommerce-cart-form">
              	<table class="shop_table cart woocommerce-cart-form__contents" cellspacing="0">
              		<thead>
              			<tr>
              				<th class="product-name" colspan="3">Products</th>
              				<th class="product-price">Price</th>
              				<th class="product-quantity">Quantity</th>
              				<th class="product-subtotal">Total</th>
              			</tr>
              		</thead>

                  <tbody>
                		<tr class="woocommerce-cart-form__cart-item cart_item">
                			<td class="product-name" colspan="3">
                        <a href="#" class="remove">&times;</a>

                        <a href="shop-single.php">
                          <img width="60" height="60" src="https://via.placeholder.com/60" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                        </a>

                        <div class="product-details">
                          <a href="shop-single.php">Eco Yoga Mat</a>
                        </div>
                      </td>

                      <td class="product-price">
                        <span class="woocommerce-Price-amount amount">
                          <span class="woocommerce-Price-currencySymbol">&#36;</span>28.00
                        </span>
                      </td>

                			<td class="product-quantity" data-title="Quantity">
                        <div class="quantity" data-trigger="spinner">
                          <label class="screen-reader-text">Quantity</label>

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
                      </td>

                      <td class="product-subtotal">
                        <span class="woocommerce-Price-amount amount">
                          <span class="woocommerce-Price-currencySymbol">&#36;</span>28.00
                        </span>
                      </td>
                    </tr>

                    <tr class="woocommerce-cart-form__cart-item cart_item">
                      <td class="product-name" colspan="3">
                        <a href="#" class="remove">&times;</a>

                        <a href="shop-single.php">
                          <img width="60" height="60" src="https://via.placeholder.com/60" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                        </a>

                        <div class="product-details">
                          <a href="shop-single.php">Eco 500ml Bottle</a>
                        </div>
                      </td>

                      <td class="product-price">
                        <span class="woocommerce-Price-amount amount">
                          <span class="woocommerce-Price-currencySymbol">&#36;</span>18.00
                        </span>
                      </td>

                			<td class="product-quantity">
                        <div class="quantity" data-trigger="spinner">
                          <label class="screen-reader-text">Quantity</label>

                          <input
                            data-rule="quantity"
                      			type="text"

                      			id="quantity_5c39c91d715ec"
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
                      </td>

                      <td class="product-subtotal">
                        <span class="woocommerce-Price-amount amount">
                          <span class="woocommerce-Price-currencySymbol">&#36;</span>18.00
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="6" class="actions">
                        <div class="coupon">
                          <label for="coupon_code">Coupon:</label>
                          <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" />
                          <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                        </div>

                        <button type="submit" class="button">Proceed to Checkout</button>
                      </td>
                    </tr>
                  </tbody>
                </table><!-- /.shop_table -->
              </form><!-- /.woocommerce-cart-form -->

            </div><!-- /.woocommerce -->
          </div><!-- .entry-content -->
        </article><!-- /.page -->

      </main><!-- /.main-content -->
    </div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>

</div><!-- /.content-wrapper -->
<?php get_footer();
