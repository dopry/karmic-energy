<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
	'body_class' => $GLOBALS['body_class'] . '',
	'title' => 'Pricing Table',
	'scripts' => array(
	),
	'styles' => array(
	)
);

get_header($config);
?>

<div class="content-wrapper">

  <?php get_page_title($config); ?>

	<div class="container-fluid main-wrapper clearfix">

		<!-- =================================== -->
		<!-- Different data widgets ============ -->
		<!-- =================================== -->
		<div class="widget-list row">

      <!-- Pricing Box Minimal -->
      <div id="pricing-box-page__minimal-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

						<div class="row">
              <div class="col-lg-4">
                <div class="pricing-box pricing-box-minimal">
                  <header>
                    <span>Weekend Pass</span>
										<h4 class="fancy-heading">
											<span>
												<span class="pricing-currency">&dollar;</span>85
											</span>
										</h4>
                    <small>/mo</small>
                  </header>

                  <div class="pricing-box-content">
                    <ul class="list-unstyled">
                      <li>Unlimited Classes (Sat & Sun)</li>
                      <li>Free Mat and Towel Rentals</li>
                      <li>15% off Workshops</li>
                    </ul><!-- /.list-unstyled -->

                    <a href="javascript:void(0)" class="btn btn-rounded btn-tertiary text-uppercase">
                      Join Now
                    </a>
                  </div><!-- /.pricing-box-content -->
                </div><!-- /.pricing-box -->
              </div><!-- /.col-lg-4 -->

              <div class="col-lg-4">
                <div class="pricing-box pricing-box-minimal pricing-box-active">
                  <header>
                    <span>Monthly Pass</span>
										<h4 class="fancy-heading">
											<span>
												<span class="pricing-currency">&dollar;</span>145
											</span>
										</h4>
                    <small>/mo</small>
                  </header>

                  <div class="pricing-box-content">
                    <ul class="list-unstyled">
                      <li>Unlimited Classes</li>
                      <li>Free Mat and Towel Rentals</li>
                      <li>15% off Workshops</li>
                    </ul><!-- /.list-unstyled -->

                    <a href="javascript:void(0)" class="btn btn-rounded btn-primary text-uppercase">
                      Join Now
                    </a>
                  </div><!-- /.pricing-box-content -->
                </div><!-- /.pricing-box -->
              </div><!-- /.col-lg-4 -->

              <div class="col-lg-4">
                <div class="pricing-box pricing-box-minimal">
                  <header>
                    <span>Annual Pass</span>
                    <h4 class="fancy-heading">
											<span>
												<span class="pricing-currency">&dollar;</span>85
											</span>
										</h4>
                    <small>/mo</small>
                  </header>

                  <div class="pricing-box-content">
                    <ul class="list-unstyled">
                      <li>Unlimited Classes</li>
                      <li>Free Mat and Towel Rentals</li>
                      <li>15% off Workshops</li>
                    </ul><!-- /.list-unstyled -->

                    <a href="javascript:void(0)" class="btn btn-rounded btn-tertiary text-uppercase">
                      Join Now
                    </a>
                  </div><!-- /.pricing-box-content -->
                </div><!-- /.pricing-box -->

              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Pricing Box Border-->
      <div id="pricing-box-page__border-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Pricing Box Border</span>
                </h2>
              </div>
            </div><!-- /.row -->

            <div class="row no-gutters">
              <div class="col-lg-4">
                <div class="pricing-box pricing-box-border">
                  <header>
                    <span>Weekend Pass</span>
                    <h4 class="fancy-heading">
											<span><span class="pricing-currency">&dollar;</span>85</span>
											<small>/month</small>
										</h4>
                  </header>

                  <div class="pricing-box-content">
                    <ul class="list-unstyled">
                      <li>Unlimited Classes (Sat & Sun)</li>
                      <li>Free Mat and Towel Rentals</li>
                      <li>15% off Workshops</li>
                    </ul><!-- /.list-unstyled -->

                    <a href="javascript:void(0)" class="btn btn-rounded btn-primary btn-primary-gradient text-uppercase">
                      Join Now
                    </a>
                  </div><!-- /.pricing-box-content -->
                </div><!-- /.pricing-box -->
              </div><!-- /.col-lg-4 -->

              <div class="col-lg-4">
                <div class="pricing-box pricing-box-border">
                  <header>
                    <span>Monthly Pass</span>
										<h4 class="fancy-heading">
											<span><span class="pricing-currency">&dollar;</span>145</span>
											<small>/month</small>
										</h4>
                  </header>

                  <div class="pricing-box-content">
                    <ul class="list-unstyled">
                      <li>Unlimited Classes</li>
                      <li>Free Mat and Towel Rentals</li>
                      <li>15% off Workshops</li>
                    </ul><!-- /.list-unstyled -->

                    <a href="javascript:void(0)" class="btn btn-rounded btn-primary btn-primary-gradient text-uppercase">
                      Join Now
                    </a>
                  </div><!-- /.pricing-box-content -->
                </div><!-- /.pricing-box -->
              </div><!-- /.col-lg-4 -->

              <div class="col-lg-4">
                <div class="pricing-box pricing-box-minimal pricing-box-border">
                  <header>
                    <span>Annual Pass</span>
										<h4 class="fancy-heading">
											<span><span class="pricing-currency">&dollar;</span>85</span>
											<small>/month</small>
										</h4>
                  </header>

                  <div class="pricing-box-content">
                    <ul class="list-unstyled">
                      <li>Unlimited Classes</li>
                      <li>Free Mat and Towel Rentals</li>
                      <li>15% off Workshops</li>
                    </ul><!-- /.list-unstyled -->

                    <a href="javascript:void(0)" class="btn btn-rounded btn-primary btn-primary-gradient text-uppercase">
                      Join Now
                    </a>
                  </div><!-- /.pricing-box-content -->
                </div><!-- /.pricing-box -->

              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>
  
</div><!-- /.content-wrapper -->

<?php get_footer();
