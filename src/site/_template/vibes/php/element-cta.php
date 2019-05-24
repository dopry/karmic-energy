<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
    'body_class' => $GLOBALS['body_class'] . '',
    'title' => 'Call To Action',
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

      <!-- Call to Action -->
      <div id="cta-page__default" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-8 offset-md-2">

                <div class="element-cta element-cta-1" id="cta-page__cta">

                  <h6 class="section-sub-heading-lines text-center">
                    <i class="vibes-vibes"></i>
                    <span class="title">Latest From Our Blog</span>
                  </h6><!-- /.section-sub-heading -->

                  <h4 class="text-uppercase fw-400 text-white" data-aos="zoom-in">Premium Collection</h4>
                  <p class="h4 mb-0 fw-400 text-muted">Up to 80% Off Sale</p>

                  <a href="#" class="btn btn-lg btn-fancy px-4">
                    Shop Now
                    <i class="feather-arrow-right fs-18 ml-5"></i>
                  </a>
                </div>

              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

			<!-- Call to Action -->
			<div id="cta-page__form-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">

                <h2 class="fancy-heading heading-effect text-center mr-b-30">
                  <span class="title">Lets stay in touch.<br />Subscribe to our newsletter</span>
                </h2>

                <div class="row">
                  <div class="col-md-8 offset-md-2">

                    <form class="newsletter-minimal">
                      <div class="form-group">
                        <div class="form-input-icon">
                          <i class="feather-mail"></i>
                          <input class="form-control form-control-rounded" placeholder="Enter email address and hit enter" type="email">
                        </div>
                      </div>

                      <input type="submit" class="btn btn-rounded btn-primary btn-primary-gradient small" value="Subscribe Now">
                    </form>

                    <p class="text-center">
                    <a href="Javascript:void(0);" class="text-primary fw-600"><u>we promise to never share your details with a 3rd party</u></a>
                    </p>

                  </div>
                </div><!-- /.row -->

              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

					</div><!-- /.widget-body -->
				</div><!-- /.widget-bg -->
			</div><!-- /.widget-holder -->

      <!-- Call to Action -->
      <div class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container-fluid">

              <div class="row no-gutters">
                <div class="col">
                  <a href="#" class="btn btn-block btn-cta">Get started for just $29 per month</a>
                </div><!-- /.col-md-12 -->
              </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>
  
</div><!-- /.content-wrapper -->
<?php get_footer();
