<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . '',
  'title' => 'Countdown',
  'scripts' => array(
    'countdown',
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

			<!-- Countdown -->
			<div id="countdown-page-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12 text-center">

                <div class="countdown countdown-minimal d-inline-block mx-auto mb-5"
                  data-plugin-options='{"finalDate": "12/31/2019 00:00:00"}'>
                  <span class="countdown-content">
                    <span><strong>%D</strong> day%!D</span>
                    <span><strong>%H</strong> hour%!H</span>
                    <span><strong>%M</strong> month%!M</span>
                    <span><strong>%S</strong> second%!S</span>
                  </span>
                  <span class="countdown-completed-content">
                    Welcome to the future
                  </span>
                </div>

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
