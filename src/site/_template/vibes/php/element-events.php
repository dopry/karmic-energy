<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
	'body_class' => $GLOBALS['body_class'] . '',
	'title' => 'Events',
	'scripts' => array(
    'magnific-popup'
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

      <!-- Upcoming Events -->
      <div id="events-page__widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg text-white">
          <div class="widget-body container-fluid">

            <div class="row">

              <div class="col-md-6 p-0 d-flex">
                <figure class="pos-relative mr-b-0 px-5" id="events-page__lightbox">
                  <a class="popup-youtube" href="https://www.youtube.com/watch?v=kQjtK32mGJQ?rel=0">
                    <img src="https://via.placeholder.com/800x950" alt="" class="invisible" />

                    <span class="uni-play-icon">
                      <i></i>
                    </span>
                  </a>
                </figure><!-- /.pos-relative -->
              </div><!-- /.col-md-5 -->

              <div class="col-md-6" id="events-page__events-col">
                <h6 class="section-sub-heading-lines text-left">
                  <i class="vibes-vibes"></i>
                  <span class="title">Exciting Upcoming Events</span>
                </h6><!-- /.section-sub-heading -->

                <h2 class="fancy-heading text-uppercase mr-b-50">
                  Events
                </h2><!-- /.fancy-heading -->

                <div class="event-items">
                  <div class="event-item">
                    <span class="date-container">
                      <span class="date">30</span>
                      <span class="month">August</span>
                    </span><!-- /.date-container -->

                    <div class="event-body">
                      <h6><a href="#">Yoga at the Labyrinth</a></h6>
                      <p>
                        <span>Peace Awareness Labyrinth,</span>
                        <span>Los Angeles, CA</span>
                      </p>
                    </div><!-- /.event-body -->
                  </div><!-- /.event-item -->

                  <div class="event-item">
                    <span class="date-container">
                      <span class="date">25</span>
                      <span class="month">August</span>
                    </span><!-- /.date-container -->

                    <div class="event-body">
                      <h6><a href="#">The King Yoga Experience</a></h6>
                      <p>
                        <span>6202 Afton Place,</span>
                        <span>Los Angeles, CA</span>
                      </p>
                    </div><!-- /.event-body -->
                  </div><!-- /.event-item -->

                  <div class="event-item">
                    <span class="date-container">
                      <span class="date">23</span>
                      <span class="month">August</span>
                    </span><!-- /.date-container -->

                    <div class="event-body">
                      <h6><a href="#">Yoga with a view - Poolside Edition</a></h6>
                      <p>
                        <span>Andaz West Hollywood,</span>
                        <span>West Hollywood, CA</span>
                      </p>
                    </div><!-- /.event-body -->
                  </div><!-- /.event-item -->
                </div><!-- /.event-items -->

              </div><!-- /.col-md-6 -->

            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>
  
</div><!-- /.content-wrapper -->

<?php get_footer();
