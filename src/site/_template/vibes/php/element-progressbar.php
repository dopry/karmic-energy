<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
    'body_class' => $GLOBALS['body_class'] . '',
    'title' => 'Progress Bar',
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

			<!-- Progress Bar Default -->
			<div id="progress-bar-page__default-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-6 offset-md-3">

                <div class="progress">
                  <div class="progress-bar bg-tertiary" style="width: 90%;" role="progressbar">
                    <span>Frontend</span>
                    <span class="progress-value">90%</span>
                  </div>
                </div><!-- /.progress -->

                <div class="progress">
                  <div class="progress-bar bg-tertiary" style="width: 80%;" role="progressbar">
                    <span>Backend</span>
                    <span class="progress-value">80%</span>
                  </div>
                </div><!-- /.progress -->

                <div class="progress">
                  <div class="progress-bar bg-tertiary" style="width: 85%;" role="progressbar">
                    <span>UI/UX</span>
                    <span class="progress-value">85%</span>
                  </div>
                </div><!-- /.progress -->

              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
				</div><!-- /.widget-bg -->
			</div><!-- /.widget-holder -->

      <!-- Progress Bar Wide -->
      <div id="progress-bar-page__wide-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Progress Bar Wide</span>
                </h2>
              </div>
            </div><!-- /.row -->

            <div class="row">
              <div class="col-md-6 offset-md-3">

                <div class="progress progress-wide">
                  <div class="progress-bar bg-twitter" style="width: 90%;" role="progressbar">
                    <span>Frontend</span>
                    <span class="progress-value">90%</span>
                  </div>
                </div><!-- /.progress -->

                <div class="progress progress-wide">
                  <div class="progress-bar bg-twitter" style="width: 80%;" role="progressbar">
                    <span>Backend</span>
                    <span class="progress-value">80%</span>
                  </div>
                </div><!-- /.progress -->

                <div class="progress progress-wide">
                  <div class="progress-bar bg-twitter" style="width: 85%;" role="progressbar">
                    <span>UI/UX</span>
                    <span class="progress-value">85%</span>
                  </div>
                </div><!-- /.progress -->

              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Progress Bar Vertical -->
      <div id="progress-bar-page__vertical-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Progress Bar Vertical</span>
                </h2>
              </div>
            </div><!-- /.row -->

            <div class="row">
              <div class="col-md-6 offset-md-3 text-center">

                <div class="progress progress-vertical">
                  <div class="progress-bar bg-twitter" style="height: 80%;" role="progressbar">
                    <span class="progress-title">Frontend</span>
                    <span class="progress-value">80%</span>
                  </div>
                </div><!-- /.progress -->

                <div class="progress progress-vertical">
                  <div class="progress-bar bg-twitter" style="height: 70%;" role="progressbar">
                    <span class="progress-title">Backend</span>
                    <span class="progress-value">70%</span>
                  </div>
                </div><!-- /.progress -->

                <div class="progress progress-vertical">
                  <div class="progress-bar bg-twitter" style="height: 75%;" role="progressbar">
                    <span class="progress-title">UI/UX</span>
                    <span class="progress-value">75%</span>
                  </div>
                </div><!-- /.progress -->

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
