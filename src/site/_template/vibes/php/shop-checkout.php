<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . ' page woocommerce-checkout woocommerce-page',
  'title' => array(
    'Checkout',
    'text-white text-left',
    'background-image: url(https://via.placeholder.com/1920x500/000000/111111)',
  ),
  'scripts' => array(
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

              <form class="checkout woocommerce-checkout">
            		<div class="col2-set" id="customer_details">
            			<div class="col-1">
            				<div class="woocommerce-billing-fields">
                      <h3>Billing details</h3>

                      <div class="woocommerce-billing-fields__field-wrapper">
                        <p class="form-row form-row-first validate-required">
                          <label>
                            First name&nbsp;<abbr class="required" title="required">*</abbr>
                          </label>

                          <span class="woocommerce-input-wrapper">
                            <input type="text" class="input-text" />
                          </span>
                        </p>

                        <p class="form-row form-row-last validate-required">
                          <label>
                            Last name&nbsp;<abbr class="required" title="required">*</abbr>
                          </label>

                          <span class="woocommerce-input-wrapper">
                            <input type="text" class="input-text" />
                          </span>
                        </p>

                        <p class="form-row form-row-wide">
                          <label>
                            Company name&nbsp;<span class="optional">(optional)</span>
                          </label>

                          <span class="woocommerce-input-wrapper">
                            <input type="text" class="input-text" />
                          </span>
                        </p>

                        <p class="form-row form-row-wide address-field validate-required">
                          <label>
                            Country&nbsp;<abbr class="required" title="required">*</abbr>
                          </label>

                          <span class="woocommerce-input-wrapper">
                            <select class="country_to_state country_select">
                              <option value="">Select a country&hellip;</option>
                              <option value="AU">Australia</option>
                              <option value="CA">Canada</option>
                              <option value="FR">France</option>
                              <option value="UK">United Kingdom</option>
                              <option value="US">United States</option>
                            </select>
                          </span>
                        </p>

                        <p class="form-row form-row-wide address-field validate-required">
                          <label>
                            Street address&nbsp;<abbr class="required" title="required">*</abbr>
                          </label>

                          <span class="woocommerce-input-wrapper">
                            <input type="text" class="input-text" />
                          </span>
                        </p>

                        <p class="form-row form-row-wide address-field">
                          <label class="screen-reader-text">
                            Apartment, suite, unit etc.&nbsp;<span class="optional">(optional)</span>
                          </label>

                          <span class="woocommerce-input-wrapper">
                            <input type="text" class="input-text" />
                          </span>
                        </p>

                        <p class="form-row form-row-wide address-field validate-required">
                          <label>
                            Town / City&nbsp;<abbr class="required" title="required">*</abbr>
                          </label>

                          <span class="woocommerce-input-wrapper">
                            <input type="text" class="input-text" />
                          </span>
                        </p>

                        <p class="form-row form-row-wide address-field validate-required validate-state">
                          <label>
                            State / County&nbsp;<abbr class="required" title="required">*</abbr>
                          </label>

                          <span class="woocommerce-input-wrapper">
                            <select class="state_select">
                      				<option value="">Select a state&hellip;</option>
                              <option value="AL">Alabama</option>
                              <option value="AK">Alaska</option>
                              <option value="AZ">Arizona</option>
                              <option value="AR">Arkansas</option>
                            </select>
                          </span>
                        </p>

                        <p class="form-row form-row-wide address-field validate-required validate-postcode">
                          <label>
                            Postcode / ZIP&nbsp;<abbr class="required" title="required">*</abbr>
                          </label>

                          <span class="woocommerce-input-wrapper">
                            <input type="text" class="input-text" />
                          </span>
                        </p>

                        <p class="form-row form-row-wide validate-phone">
                          <label>
                            Phone&nbsp;<span class="optional">(optional)</span>
                          </label>

                          <span class="woocommerce-input-wrapper">
                            <input type="tel" class="input-text" />
                          </span>
                        </p>

                        <p class="form-row form-row-wide validate-required validate-email">
                          <label>
                            Email address&nbsp;<abbr class="required" title="required">*</abbr>
                          </label>

                          <span class="woocommerce-input-wrapper">
                            <input type="email" class="input-text" />
                          </span>
                        </p>
                      </div><!-- /.woocommerce-billing-fields__field-wrapper -->
                    </div><!-- /.woocommerce-billing-fields -->

                  </div><!-- /.col-1 -->

                  <div class="col-2">
                    <div class="woocommerce-shipping-fields">
                  		<h3 id="ship-to-different-address">
                  			<label class="woocommerce-form__label checkbox">
                  				<span>Shipping Address</span>
                  			</label>
                  		</h3>

                  		<div class="shipping_address">
                  			<div class="woocommerce-shipping-fields__field-wrapper">
                  				<p class="form-row form-row-first validate-required" id="shipping_first_name_field">
                            <label>First name&nbsp;<abbr class="required" title="required">*</abbr></label>

                            <span class="woocommerce-input-wrapper">
                              <input type="text" class="input-text" />
                            </span>
                          </p>

                          <p class="form-row form-row-last validate-required">
                            <label>Last name&nbsp;<abbr class="required" title="required">*</abbr></label>

                            <span class="woocommerce-input-wrapper">
                              <input type="text" class="input-text" />
                            </span>
                          </p>

                          <p class="form-row form-row-wide">
                            <label>Company name&nbsp;<span class="optional">(optional)</span></label>

                            <span class="woocommerce-input-wrapper">
                              <input type="text" class="input-text" />
                            </span>
                          </p>

                          <p class="form-row form-row-wide address-field update_totals_on_change validate-required">
                            <label>Country&nbsp;<abbr class="required" title="required">*</abbr></label>

                            <span class="woocommerce-input-wrapper">
                              <select class="country_to_state country_select">
                                <option value="">Select a country&hellip;</option>
                                <option value="AU">Australia</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="UK">United Kingdom</option>
                                <option value="US">United States</option>
                              </select>
                            </span>
                          </p>

                          <p class="form-row form-row-wide address-field validate-required">
                            <label>Street address&nbsp;<abbr class="required" title="required">*</abbr></label>

                            <span class="woocommerce-input-wrapper">
                              <input type="text" class="input-text" />
                            </span>
                          </p>

                          <p class="form-row form-row-wide address-field">
                            <label class="screen-reader-text">
                              Apartment, suite, unit etc.&nbsp;<span class="optional">(optional)</span>
                            </label>

                            <span class="woocommerce-input-wrapper">
                              <input type="text" class="input-text" placeholder="Apartment, suite, unit etc. (optional)" />
                            </span>
                          </p>

                          <p class="form-row form-row-wide address-field validate-required">
                            <label>Town / City&nbsp;<abbr class="required" title="required">*</abbr></label>

                            <span class="woocommerce-input-wrapper">
                              <input type="text" class="input-text" />
                            </span>
                          </p>

                          <p class="form-row form-row-wide address-field validate-required validate-state">
                            <label>State / County&nbsp;<abbr class="required" title="required">*</abbr></label>

                            <span class="woocommerce-input-wrapper">
                              <select class="state_select">
                                <option value="">Select a state&hellip;</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                              </select>
                            </span>
                          </p>

                          <p class="form-row form-row-wide address-field validate-required validate-postcode">
                            <label>Postcode / ZIP&nbsp;<abbr class="required" title="required">*</abbr></label>

                            <span class="woocommerce-input-wrapper">
                              <input type="text" class="input-text" />
                            </span>
                          </p>
                        </div><!-- /.woocommerce-shipping-fields__field-wrapper -->
                  		</div><!-- /.shipping_address -->
                  	</div><!-- /.woocommerce-shipping-fields -->

                    <div class="woocommerce-additional-fields">
                  		<div class="woocommerce-additional-fields__field-wrapper">
                  			<p class="form-row notes">
                          <label>Order notes&nbsp;<span class="optional">(optional)</span></label>

                          <span class="woocommerce-input-wrapper">
                            <textarea class="input-text" placeholder="Notes about your order, e.g. special notes for delivery."  rows="2" cols="5"></textarea>
                          </span>
                        </p>
                      </div><!-- /.woocommerce-additional-fields__field-wrapper -->
                  	</div><!-- /.woocommerce-additional-fields -->
                  </div><!-- /.col-2 -->
                </div><!-- /.col2-set -->

                <h3 id="order_review_heading">Your order</h3>

              	<div id="order_review" class="woocommerce-checkout-review-order">

                  <table class="col-lg-6 shop_table woocommerce-checkout-review-order-table">
                  	<thead>
                  		<tr>
                  			<th class="product-name">Product</th>
                  			<th class="product-total">Total</th>
                  		</tr>
                  	</thead>

                    <tbody>
                      <tr class="cart_item">
                        <td class="product-name">
                          Belt&nbsp;
                          <strong class="product-quantity">&times; 1</strong>
                        </td>

                        <td class="product-total">
              						<span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">&#36;</span>55.00
                          </span>
                        </td>
              				</tr>

                      <tr class="cart_item">
                        <td class="product-name">
              						Beanie with Logo&nbsp;
                          <strong class="product-quantity">&times; 1</strong>
                        </td>

                        <td class="product-total">
              						<span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">&#36;</span>18.00
                          </span>
                        </td>
              				</tr>
              			</tbody>

                    <tfoot>
                  		<tr class="cart-subtotal">
                  			<th>Subtotal</th>
                  			<td>
                          <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">&#36;</span>73.00
                          </span>
                        </td>
                  		</tr>

                      <tr class="woocommerce-shipping-totals shipping">
                        <th>Shipping</th>

                        <td data-title="Shipping">
                          <ul id="shipping_method" class="woocommerce-shipping-methods">
                            <li>
                              <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate2" value="flat_rate:2" class="shipping_method" />

                              <label for="shipping_method_0_flat_rate2">
                                Flat rate:
                                <span class="woocommerce-Price-amount amount">
                                  <span class="woocommerce-Price-currencySymbol">&#36;</span>4.99
                                </span>
                              </label>
                            </li>
                					</ul><!-- /.woocommerce-shipping-methods -->
                        </td>
                      </tr><!-- /.woocommerce-shipping-totals -->

                      <tr class="order-total">
                        <th>Total</th>
                        <td>
                          <strong>
                            <span class="woocommerce-Price-amount amount">
                              <span class="woocommerce-Price-currencySymbol">&#36;</span>77.99
                            </span>
                          </strong>
                        </td>
                      </tr><!-- /.order-total -->
                    </tfoot>
                  </table><!-- /.shop_table -->

                  <div id="payment" class="col-lg-6 woocommerce-checkout-payment">
                    <ul class="wc_payment_methods payment_methods methods">
                      <li class="wc_payment_method payment_method_bacs">
                        <input type="radio" class="input-radio" id="payment_method_dbt" name="payment_method" value="bacs" checked='checked' />

                        <label for="payment_method_dbt">Direct bank transfer</label>
                        <div class="payment_box payment_method_bacs">
                    			<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                    		</div>
                      </li>

                      <li class="wc_payment_method payment_method_cheque">
                        <input type="radio" id="payment_method_cheque" class="input-radio" name="payment_method" value="cheque" />

                        <label for="payment_method_cheque">Check payments</label>
                  			<div class="payment_box payment_method_cheque" style="display:none;">
                    			<p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                    		</div>
                      </li>

                      <li class="wc_payment_method payment_method_cod">
                        <input type="radio" id="payment_method_cod" class="input-radio" name="payment_method" value="cod" />

                        <label for="payment_method_cod">Cash on delivery</label>
                  			<div class="payment_box payment_method_cod" style="display:none;">
                    			<p>Pay with cash upon delivery.</p>
                    		</div>
                      </li>
                    </ul><!-- /.payment_methods -->

                    <div class="form-row place-order">
                  		<div class="woocommerce-terms-and-conditions-wrapper">
                  	    <div class="woocommerce-privacy-policy-text">
                          <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                        </div>
                  		</div>

                  		<button type="submit" class="button alt" value="Place order">Place order</button>
                  	</div><!-- /.place-order -->
                  </div><!-- /.woocommerce-checkout-payment -->

              	</div><!-- /.woocommerce-checkout-review-order -->
              </form><!-- /.woocommerce-checkout -->
              
            </div><!-- /.woocommerce -->
          </div><!-- .entry-content -->
        </article>

      </main><!-- /.main-content -->
    </div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>

</div><!-- /.content-wrapper -->
<?php get_footer();
