<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
	'body_class' => $GLOBALS['body_class'] . '',
	'title' => 'Counter Box',
	'scripts' => array(
    'countup'
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

      <!-- Default -->
      <div id="counter-page-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-10 mx-auto">

                <div class="row">
                  <div class="col-md-3" data-aos="fade-in">
                    <div class="counter-box counter-box-line-under">
                      <span class="counter-box-title">Trainers</span>
                      <span class="counter" data-plugin-options='{"end": 28}'></span>
                    </div>
                  </div><!-- /.col-md-3 -->

                  <div class="col-md-3" data-aos="fade-in" data-aos-delay="50">
                    <div class="counter-box counter-box-line-under">
                      <span class="counter-box-title">Awards</span>
                      <span class="counter" data-plugin-options='{"end": 16}'></span>
                    </div>
                  </div><!-- /.col-md-3 -->

                  <div class="col-md-3" data-aos="fade-in" data-aos-delay="100">
                    <div class="counter-box counter-box-line-under">
                      <span class="counter-box-title">Classes</span>
                      <span class="counter" data-plugin-options='{"end": 42}'></span>
                    </div>
                  </div><!-- /.col-md-3 -->

                  <div class="col-md-3" data-aos="fade-in" data-aos-delay="150">
                    <div class="counter-box counter-box-line-under">
                      <span class="counter-box-title">Yogis</span>
                      <span class="counter" data-plugin-options='{"end": 276}'></span>
                    </div>
                  </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
              </div><!-- /.col-md-10 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>
  
</div><!-- /.content-wrapper -->

<?php get_footer();
