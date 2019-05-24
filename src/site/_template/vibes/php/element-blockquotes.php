<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
	'body_class' => $GLOBALS['body_class'] . '',
	'title' => 'Blockquotes',
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

      <!-- Quotes Default -->
      <div id="quotes-page__default-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row mr-b-100">
              <div class="col-md-5 offset-md-1 pd-lr-20">
                <div class="quotes quotes-minimal">
                  <blockquote>
                    Sed nec blandit nibh. Pellentesque commodo suscipit gravida. Sed sit amet ex sed mi dignissim elementum in ut quam. Vivamus laoreet non mauris eget mattis.
                  </blockquote>

                  <div class="media">
                    <img src="assets/img/default-avatar.jpg" alt="" />
                    <div class="media-body">
                      <p>Marsha Hoffman</p>
                      <small>Client</small>
                    </div>
                  </div>
                </div><!-- /.quotes -->
              </div><!-- /.col-md-5 -->

              <div class="col-md-5 pd-lr-20">
                <div class="quotes quotes-minimal">
                  <blockquote>
                    Sed nec blandit nibh. Pellentesque commodo suscipit gravida. Sed sit amet ex sed mi dignissim elementum in ut quam. Vivamus laoreet non mauris eget mattis.
                  </blockquote>

                  <div class="media">
                    <img src="assets/img/default-avatar.jpg" alt="" />
                    <div class="media-body">
                      <p>Mildred Burton</p>
                      <small>Client</small>
                    </div>
                  </div>
                </div><!-- /.quotes -->
              </div><!-- /.col-md-5 -->
            </div><!-- /.row -->

            <div class="row">
              <div class="col-md-5 offset-md-1 pd-lr-20">
                <div class="quotes quotes-minimal">
                  <blockquote>
                      Sed nec blandit nibh. Pellentesque commodo suscipit gravida. Sed sit amet ex sed mi dignissim elementum in ut quam. Vivamus laoreet non mauris eget mattis.
                  </blockquote>

                  <div class="media">
                    <img src="assets/img/default-avatar.jpg" alt="" />
                    <div class="media-body">
                      <p>Shelly Sullivan</p>
                      <small>Client</small>
                    </div>
                  </div>
                </div><!-- /.quotes -->
              </div><!-- /.col-md-5 -->

							<div class="col-md-5 pd-lr-20">
                <div class="quotes quotes-minimal mr-b-30">
                  <blockquote>
                    Sed nec blandit nibh. Pellentesque commodo suscipit gravida. Sed sit amet ex sed mi dignissim elementum in ut quam. Vivamus laoreet non mauris eget mattis.
                  </blockquote>

                  <div class="media">
                    <img src="assets/img/default-avatar.jpg" alt="" />
                    <div class="media-body">
                      <p>Joan Willis</p>
                        <small>Client</small>
                    </div>
                  </div>
                </div><!-- /.quotes -->
              </div><!-- /.col-md-5 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

			<!-- Quotes Carousel -->
			<div id="quotes-page__carousel-widget" class="widget-holder col-md-12 p-0">
				<div class="widget-bg">
					<div class="widget-body container">

            <div class="row">
              <div class="col-md-12">

                <h2 class="fancy-heading mr-b-30 text-center">
                  <span>Quotes Carousel</span>
                </h2>

                <div class="quotes-carousel-container slick-container">
                  <div class="slick-slider quotes-carousel"
                        data-slick='{
                          "arrows": false,
                          "autoplay": false,
                        }'
                        data-nav-target="#carousel-quotes-1-nav"
                        id="carousel-quotes-1">

                    <?php for($i=0;$i<6;$i++): ?>
                    <blockquote class="slider-item">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sollicitudin tortor nec fermentum mattis. Quisque placerat diam enim, eu dapibus orci tempor quis quisque facilisis ex. enean sollicitudin tortor nec fermentum mattis.</p>
                    </blockquote><!-- /.slider-item -->
                    <?php endfor; ?>

                  </div><!-- /.quotes-carousel -->

                </div><!-- /.quotes-carousel-container -->

                <!--Thumbnail slider container-->
                <div class="quotes-carousel-thumbs-container slick-container">
                  <div class="slick-slider-nav quotes-carousel-thumbs" id="carousel-quotes-1-nav" data-nav-target="#carousel-quotes-1"
                       data-slick='{
                         "centerMode": true,
                         "centerPadding": 0,
                         "slidesToShow": 5,
                         "slidesToScroll": 5,
                         "arrows": false,
                         "responsive": [
                          {
                            "breakpoint": 1200,
                            "settings": {
                              "slidesToShow": 5,
                              "slidesToScroll": 5,
                              "centerMode": true
                            }
                          }, {
                            "breakpoint": 768,
                            "settings": {
                              "slidesToShow": 3,
                              "slidesToScroll": 3,
                              "centerMode": true
                            }
                          }, {
                            "breakpoint": 576,
                            "settings": {
                              "slidesToShow": 1,
                              "slidesToScroll": 1,
                              "centerMode": true
                            }
                          }
                         ]
                       }'>
                    <div class="slider-item">
                      <figure>
                        <img src="assets/img/default-avatar.jpg" alt="" />
                      </figure>

                      <div>
                        <p class="headings-color m-0">Marsha Hoffman</p>
                        <small>Client</small>
                      </div>
                    </div><!-- /.item -->

                    <div class="slider-item">
                      <figure>
                        <img src="assets/img/default-avatar.jpg" alt="" />
                      </figure>

                      <div>
                        <p class="headings-color m-0">Maxine Lowe</p>
                        <small>Client</small>
                      </div>
                    </div><!-- /.item -->

                    <div class="slider-item">
                      <figure>
                        <img src="assets/img/default-avatar.jpg" alt="" />
                      </figure>

                      <div>
                        <p class="headings-color m-0">Sylvia Harvey</p>
                        <small>Client</small>
                      </div>
                    </div><!-- /.item -->

                    <div class="slider-item">
                      <figure>
                        <img src="assets/img/default-avatar.jpg" alt="" />
                      </figure>

                      <div>
                        <p class="headings-color m-0">Shelly Sullivan</p>
                        <small>Client</small>
                      </div>
                    </div><!-- /.item -->

                    <div class="slider-item">
                      <figure>
                        <img src="assets/img/default-avatar.jpg" alt="" />
                      </figure>

                      <div>
                        <p class="headings-color m-0">Joan Willis</p>
                        <small>Client</small>
                      </div>
                    </div><!-- /.item -->

                    <div class="slider-item">
                      <figure>
                        <img src="assets/img/default-avatar.jpg" alt="" />
                      </figure>

                      <div>
                        <p class="headings-color m-0">Mildred Burton</p>
                        <small>Client</small>
                      </div>
                    </div><!-- /.item -->

                  </div><!-- /.quotes-carousel-thumbs -->

                  <div class="slick-slider-controls">
                    <a class="slick-slider-left" href="javascript:;">
                      <span><i class="feather-arrow-left"></i></span>
                    </a>

                    <a class="slick-slider-right" href="javascript:;">
                      <span><i class="feather-arrow-right"></i></span>
                    </a>
                  </div><!-- /.slick-slider-controls -->
                </div><!-- /.quotes-carousel-thumbs-container -->

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
