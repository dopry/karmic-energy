<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
	'body_class' => $GLOBALS['body_class'] . '',
	'title' => 'Timeline',
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

      <!-- Timeline -->
      <div id="timeline-page-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-9 mx-auto">
                <div class="timelines timelines-alternate-image container-fluid" id="timeline">

                  <?php for($i = 1; $i <= 5; $i++): ?>
                    <div class="timeline-single <?= $i % 2 ? 'timeline-single-right' : null ?> row" id="timeline-<?php echo $i * 2 + 1; ?>">
                      <h6 class="timeline-time">1900</h6>
                      <div class="timeline-img col-md-6" data-aos="zoom-out" data-aos-duration="1000" data-aos-easing="ease-out-expo">
                        <figure>
                          <img src="https://via.placeholder.com/500" alt="Red Illusion" width="240" height="240" />
                        </figure>
                      </div>
                      <div class="timeline-body col-md-6"
                            data-aos="zoom-out"
                            data-aos-duration="1000" data-aos-easing="ease-out-expo"
                            data-aos-anchor="#timeline-<?php echo $i * 2 + 1; ?> > .timeline-img">
                        <h3 class="timeline-heading">Red Illusion</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a luctus leo. Sed lacinia, est non volutpat sagittis, elit dui imperdiet magna, nec pulvinar nulla ante mollis purus.</p>
                      </div><!-- /.timeline-body -->
                      <div class="timeline-trail"></div><!-- /.timeline-trail -->
                    </div><!-- /.timeline-single -->
                  <?php endfor; ?>

                </div><!-- /.timelines -->

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
