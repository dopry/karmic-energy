<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
    'body_class' => $GLOBALS['body_class'] . '',
    'title' => 'Buttons',
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

			<!-- Buttons Default -->
			<div id="btn-page__default-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-8 offset-md-2">
                <div class="row">
                  <div class="col-md-3">
                    <button class="btn btn-block btn-default">Default</button>
                  </div>

                  <div class="col-md-3">
                    <button class="btn btn-block btn-primary">Primary</button>
                  </div>

                  <div class="col-md-3">
                    <button class="btn btn-block btn-rounded btn-warning">Warning</button>
                  </div>

                  <div class="col-md-3">
                    <button class="btn btn-block btn-rounded btn-info">Info</button>
                  </div>
                </div><!-- /.row -->
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->

					</div><!-- /.widget-body -->
				</div><!-- /.widget-bg -->
			</div><!-- /.widget-holder -->

      <!-- Buttons Outline -->
      <div id="btn-page__outline-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Button Outline</span>
                </h2>
              </div>

              <div class="col-md-8 offset-md-2">
                <div class="row">
                  <div class="col-md-3">
                    <button class="btn btn-block btn-outline-default">Default</button>
                  </div>

                  <div class="col-md-3">
                    <button class="btn btn-block btn-outline-primary">Primary</button>
                  </div>

                  <div class="col-md-3">
                    <button class="btn btn-block btn-rounded btn-outline-success">Warning</button>
                  </div>

                  <div class="col-md-3">
                    <button class="btn btn-block btn-rounded btn-outline-info">Info</button>
                  </div>
                </div><!-- /.row -->
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Buttons Sizes -->
      <div id="btn-page__sizes-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Button Sizes</span>
                </h2>
              </div>

              <div class="col-md-8 offset-md-2">
                <div class="row">
                  <div class="col-md-3">
                    <button class="btn btn-lg btn-outline-default">Large</button>
                  </div>

                  <div class="col-md-3">
                    <button class="btn btn-outline-default">Default</button>
                  </div>

                  <div class="col-md-3">
                    <button class="btn btn-sm btn-outline-default">Small</button>
                  </div>

                </div><!-- /.row -->
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Buttons with icons -->
      <div id="btn-page__icons-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Button with icons</span>
                </h2>
              </div>

              <div class="col-md-8 offset-md-2">
                <div class="row">
                  <div class="col-md-3">
                    <button class="btn btn-outline-default">
                      <i class="feather-heart"></i>
                      <span>Default</span>
                    </button>
                  </div>

                  <div class="col-md-3">
                    <button class="btn btn-primary btn-rounded">
                      <i class="feather-star"></i>
                      <span>Primary</span>
                    </button>
                  </div>

                  <div class="col-md-3">
                    <button class="btn btn-success btn-rounded">
                      <i class="feather-check"></i>
                      <span>Success</span>
                    </button>
                  </div>

                  <div class="col-md-3">
                    <button class="btn btn-info">
                      <i class="feather-mail"></i>
                      <span>Info</span>
                    </button>
                  </div>

                </div><!-- /.row -->
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>
  
</div><!-- /.content-wrapper -->
<?php get_footer();
