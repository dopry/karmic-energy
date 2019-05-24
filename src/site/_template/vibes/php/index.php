<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
  'header_skin' => 'light',
  'body_class' => $GLOBALS['body_class'] . ' home header-overlay',
  'title' => 'Great Vibes - Premium HTML Template',
  'scripts' => array(
    'magnific-popup',
    'animejs',
  ),
  'styles' => array(
    'magnific-popup'
  )
);

get_header($config);
?>

<div class="content-wrapper">

  <div class="container-fluid main-wrapper clearfix">

    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widget-list row">

      <div id="top"></div>

      <!-- Slideshow -->
      <div class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container-fluid">

            <div class="row slick-container slick-container-home" id="slider-home-main">
              <div class="slick-slider" data-slick='{"fade": true, "dots": true}'>

                <div class="slider-item slide-1" data-set-header-skin="light">
                  <div class="col-md-6 mx-auto text-center">
                    <p class="text-white mr-b-40 mr-t-40" data-animation-in="fadeInUp" data-animation-in-delay="400ms">
                      <span class="shape-circle fs-10 bg-tertiary mr-1 animated infinite pulse"></span> start your 7 day free trial now
                    </p>

                    <h2 class="h1 fw-500 text-white lh-10 mr-b-50" id="slide-1-title" data-animation-in="flipInX">
                      top notch yoga<br />classes for all
                    </h2>

                    <a href="javascript:void(0)" class="btn btn-fancy mr-lr-15" data-animation-in="fadeInLeft" data-animation-in-delay="400ms">
                      Sign Up Now <i class="feather-arrow-right fs-18 ml-3 align-middle"></i>
                    </a>

                    <a href="javascript:void(0)" class="btn btn-line-under mr-lr-15 text-white" data-animation-in="fadeInRight" data-animation-in-delay="400ms">Explore Details</a>
                  </div><!-- /.col-md-4 -->

                  <img src="assets/demo/home/swirl-1.png" id="slide-1-swirl" alt="bg" class="animated-bg-swirl" />
                </div><!-- /.slider-item -->

                <div class="slider-item slide-2" data-set-header-skin="dark">
                  <div class="col-md-5 offset-md-1">
                    <h2 class="h1 fw-500 mr-b-20 mr-t-30"
                      data-animation-in="fadeInRight"
                      data-animation-in-duration="550ms"
                      id="slide-2-title">
                      loose weight,<br />get flexible &amp;<br />tone up
                      <span class="shape-circle fs-10 bg-tertiary mr-1 animated infinite pulse"></span>
                    </h2>

                    <p class="d-none d-lg-block" data-animation-in="fadeInRight" data-animation-in-delay="1ms">We are here to guide and support you in<br />a lifetime of yoga. Our approach emphasizes<br />the developement of self-awareness</p>

                    <a href="javascript:void(0)" class="btn btn-fancy" data-animation-in="fadeInLeft" data-animation-in-delay="400ms">
                      Sign Up Now <i class="feather-arrow-right fs-18 ml-3 align-middle"></i>
                    </a>

                    <a href="javascript:void(0)" class="btn btn-line-under mr-l-30 mr-l-sm-0" data-animation-in="fadeInRight" data-animation-in-delay="400ms">Explore Details</a>

                    <img src="assets/demo/home/swirl-2.png" alt="bg" class="animated-bg-swirl" id="slide-2-swirl" />
                  </div><!-- /.col-md-4 -->
                </div><!-- /.slider-item -->

              </div><!-- /.slick-slider -->
            </div><!-- /.slick-container -->
          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <div id="home__scroll-button-widget" class="widget-holder col-md-12 p-0 d-none d-md-block">
        <div class="widget-bg">
          <div class="widget-body container-fluid">

            <div class="row no-gutters">
              <div class="col-12 d-flex justify-content-end">
                 <button id="home__scroll-button" class="btn btn-lg scroll-down-btn scroll-to-element" data-scroll-to="#home__first-element" data-scroll-to-duration="800">
                  Scroll Down
                  <span class="icon-container ml-3">
                    <i class="feather-chevron-down"></i>
                  </span>
                </button>
              </div><!-- /.col-12 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- About Us -->
      <div id="home__first-element" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">

              <div class="col-md-6  pd-l-40" data-aos="fade-left" data-aos-duration="800">
                <img src="https://via.placeholder.com/528x500" alt="" />
              </div><!-- /.col-md-6 -->

              <div class="col-md-5 offset-md-1" data-aos="fade-right" data-aos-duration="800">
                <h2 class="fancy-heading text-uppercase mr-t-60 mr-b-20">
                  Top notch <br />yoga classes
                </h2>

                <p class="mr-b-40">Our approach emphasizes the development of self awareness through precision in movement and attention to posture and breath. Enjoy the benefits of a fully equipped yoga studio. <a href="javascript:void(0)" class="small-title">Learn More Details</a></p>

                <img src="assets/demo/home/signature.png" alt="Signature" />
              </div><!-- /.col-md-6 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Features -->
      <div id="home__features-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-8">
                <h6 class="section-sub-heading-lines text-left">
                  <i class="vibes-vibes"></i>
                  <span class="title">Tons of awesome services</span>
                </h6><!-- /.section-sub-heading -->

                <h2 class="fancy-heading text-uppercase mr-b-70">
                  Harmony, Serenity, <br />Acceptance, Love
                </h2><!-- /.fancy-heading -->

                <div class="row" id="icon-box-list">
                  <div class="col-md-6" data-aos="zoom-out" data-aos-duration="800">
                    <div class="media icon-box icon-box-default">
                      <figure>
                        <i class="vibes-yoga-1 text-tertiary"></i>
                      </figure>

                      <div class="media-body">
                        <h6 class="icon-box-title">Achieve Calmness</h6>
                        <p>We have classes focused on helping you get strong and stable. Lorem ipsum dolor sit amet.</p>
                      </div>
                    </div><!-- /.icon-box -->
                  </div><!-- /.col-md-6 -->

                  <div class="col-md-6" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="800" data-aos-anchor="#icon-box-list>div:first-child">
                    <div class="media icon-box icon-box-default">
                      <figure class="">
                        <i class="vibes-strong text-tertiary"></i>
                      </figure>

                      <div class="media-body">
                        <h6 class="icon-box-title">Gain Strength</h6>
                        <p>Relax into your body and mind with these classes focused on helping you feel calm and relaxed.</p>
                      </div>
                    </div><!-- /.icon-box -->
                  </div><!-- /.col-md-6 -->

                  <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="800" data-aos-anchor="#icon-box-list>div:first-child">
                    <div class="media icon-box icon-box-default">
                      <figure>
                        <i class="vibes-healthy text-tertiary"></i>
                      </figure>

                      <div class="media-body">
                        <h6 class="icon-box-title">Develop Flexibility</h6>
                        <p>Whether it is bending over to touch your toes or getting into that new inversion, we have classes for you.</p>
                      </div>
                    </div><!-- /.icon-box -->
                  </div><!-- /.col-md-6 -->

                  <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300" data-aos-duration="800" data-aos-anchor="#icon-box-list>div:first-child">
                    <div class="media icon-box icon-box-default">
                      <figure>
                        <i class="vibes-branch text-tertiary"></i>
                      </figure>

                      <div class="media-body">
                        <h6 class="icon-box-title">Love Yourself</h6>
                        <p>Slow down and take some time for yourself with our loving, nurturing and comforting yoga class.</p>
                      </div>
                    </div><!-- /.icon-box -->
                  </div><!-- /.col-md-6 -->
                </div><!-- /.row -->

              </div><!-- /.col-md-8 -->

              <div class="col-md-4">
                <figure class="pl-sm-5 pl-0 pd-t-60">
                  <img src="https://via.placeholder.com/375x566" alt="" />
                </figure>
              </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Upcoming Events -->
      <div id="home__upcoming-events-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg text-white">
          <div class="widget-body container-fluid">

            <div class="row">

              <div class="col-md-6 p-0 d-flex">
                <figure class="pos-relative mr-b-0 px-5" id="home__upcoming-events__lightbox">
                  <a class="popup-youtube" href="https://www.youtube.com/watch?v=kQjtK32mGJQ?rel=0">
                    <img src="https://via.placeholder.com/800x950" alt="" class="invisible" />

                    <span class="uni-play-icon">
                      <i></i>
                    </span>
                  </a>
                </figure><!-- /.pos-relative -->
              </div><!-- /.col-md-5 -->

              <div class="col-md-6 mr-t-60 mr-b-40" id="home__upcoming-events__events-row">
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

      <!-- TimeTable -->
      <div id="home__timetable-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">

                <h6 class="section-sub-heading-lines text-center">
                  <i class="vibes-vibes"></i>
                  <span class="title">Many types of Classes</span>
                </h6><!-- /.section-sub-heading -->

              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
              <div class="col-md-12">

                <h2 class="fancy-heading heading-effect text-center text-uppercase mr-b-30">
                  Classes Timetable
                </h2>

                <div class="row">

                  <div class="col">
                    <div class="timetable">
                      <table class="table table-bordered table-responsive text-center">
                        <thead>
                          <tr>
                            <th>Time</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><span class="time">09:00</span></td>
                            <td>
                              <h6 class="title">Morning Flow</h6>
                              <small class="subtitle">Maxine lowe</small>
                            </td>

                            <td>
                              <h6 class="title">Morning Flow</h6>
                              <small class="subtitle">Maxine lowe</small>
                            </td>

                            <td>
                              <h6 class="title">Morning Flow</h6>
                              <small class="subtitle">Maxine lowe</small>
                            </td>

                            <td>&nbsp;</td>

                            <td>
                              <h6 class="title">Morning Flow</h6>
                              <small class="subtitle">Maxine lowe</small>
                            </td>

                            <td>
                              <h6 class="title">Morning Flow</h6>
                              <small class="subtitle">Maxine lowe</small>
                            </td>
                          </tr>

                          <tr>
                            <td><span class="time">12:00</span></td>
                            <td>&nbsp;</td>
                            <td>
                              <h6 class="title">Vinayasa Flow</h6>
                              <small class="subtitle">Tracy Vacura</small>
                            </td>
                            <td>
                              <h6 class="title">Hath Flow</h6>
                              <small class="subtitle">Shirley Krohn</small>
                            </td>
                            <td>
                              <h6 class="title">Hath Flow</h6>
                              <small class="subtitle">Shirley Krohn</small>
                            </td>
                            <td>&nbsp;</td>
                            <td>
                              <h6 class="title">Hath Flow</h6>
                              <small class="subtitle">Shirley Krohn</small>
                            </td>
                          </tr>

                          <tr>
                            <td><span class="time">15:00</span></td>
                            <td>
                              <h6 class="title">Vinayasa Flow</h6>
                              <small class="subtitle">Tracy Vacura</small>
                            </td>
                            <td>&nbsp;</td>
                            <td>
                              <h6 class="title">Vinayasa Tantra Flow</h6>
                              <small class="subtitle">Greg Hines</small>
                            </td>
                            <td>&nbsp;</td>
                            <td>
                              <h6 class="title">Vinayasa Flow</h6>
                              <small class="subtitle">Tracy Vacura</small>
                            </td>
                            <td>&nbsp;</td>
                          </tr>

                          <tr>
                            <td><span class="time">15:00</span></td>
                            <td>&nbsp;</td>
                            <td>
                              <h6 class="title">Kundalini Yoga</h6>
                              <small class="subtitle">Chelsea Schmitz</small>
                            </td>
                            <td>&nbsp;</td>
                            <td>
                              <h6 class="title">Kundalini Yoga</h6>
                              <small class="subtitle">Chelsea Schmitz</small>
                            </td>
                            <td>
                              <h6 class="title">Kundalini Yoga</h6>
                              <small class="subtitle">Chelsea Schmitz</small>
                            </td>
                            <td>
                              <h6 class="title">Kundalini Yoga</h6>
                              <small class="subtitle">Chelsea Schmitz</small>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- /.timetable -->
                  </div><!-- /.col -->
                </div><!-- /.row -->

              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Gallery -->
      <div id="home__gallery-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <div class="gallery gallery-title-first-col">
                  <div class="col-lg-6 d-flex flex-wrap">
                    <div class="col-lg-6 d-flex flex-column justify-content-center" id="gallery-page__first-col">
                      <h6 class="section-sub-heading-lines text-left">
                        <i class="vibes-vibes"></i>
                        <span class="title">Images</span>
                      </h6><!-- /.section-sub-heading -->

                      <h2 class="fancy-heading text-uppercase">
                        Gallery
                      </h2>
                    </div><!-- /.col-lg-3 -->

                    <?php for($i = 2; $i < 5; $i++ ): ?>
                    <div class="col-lg-6">

                      <figure class="gallery-item" id="gallery-<?= $i ?>">
                        <img src="https://via.placeholder.com/500" alt="Gallery <?= $i ?>" />
                        <a href="javascript:void(0)">Gallery <?= $i ?></a>
                        <figcaption>
                          Gallery <?= $i ?>
                        </figcaption>
                      </figure>
                    </div><!-- /.col-lg-3 -->
                    <?php endfor; ?>
                  </div><!-- /.col-lg-6 -->

                  <div class="col-lg-6 order-sm-0">
                    <figure class="gallery-item" id="gallery-1">
                      <img src="https://via.placeholder.com/500" alt="Gallery 1" />
                      <a href="javascript:void(0)">Gallery 1</a>
                      <figcaption>
                        Gallery 1
                      </figcaption>
                    </figure>
                  </div><!-- /.col-lg-6 -->

                </div><!-- /.gallery -->
              </div><!-- col-md-12 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Testimonials -->
      <div id="home__testimonial-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">

                <h6 class="section-sub-heading-lines text-center">
                  <i class="vibes-vibes"></i>
                  <span class="title">Latest From Our Blog</span>
                </h6><!-- /.section-sub-heading -->

              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
              <div class="col-md-12">

                <h2 class="fancy-heading text-uppercase text-center mr-b-40">
                  What real people say <br />about our studio
                </h2>

                <div class="quotes-carousel-container slick-container">
                  <div class="slick-slider quotes-carousel" data-slick='{"arrows": false, "autoplay": false}' data-nav-target="#carousel-quotes-1-nav" id="carousel-quotes-1">

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

      <!-- Blog -->
      <div id="home__blog-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">

                <h6 class="section-sub-heading-lines text-center">
                  <i class="vibes-vibes"></i>
                  <span class="title">Latest From Our Blog</span>
                </h6><!-- /.section-sub-heading -->

              </div><!-- /.col-md-12 -->
            </div>

            <div class="row">
              <div class="col-md-12">

                <h2 class="fancy-heading text-uppercase text-center mr-b-30">
                  Stories, news and events
                </h2>

                <div class="blogpost-thumbs blogpost-mediabox mr-t-60">
									<div class="row">

										<div class="col-md-6">
											<article class="post has-post-thumbnail media" id="post-1" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
												<figure class="float-left entry-thumbnail">
													<img src="assets/demo/home/post-thumb-vert-1.jpg" alt="" itemprop="image" />
                          <a href="blog-single.php" class="pos-0 text-indent-full">Introduction to Mindfulness Practice with Cator Shachoy</a>
												</figure>

												<div class="media-body">
													<p class="entry-time meta-date">
														<time class="small-title text-muted" itemprop="datePublished" datetime="2018-08-29T05:50:47+00:00">
															Sep 23, 2018
														</time>
													</p>

													<h5 class="entry-title" itemprop="headline">
														<a href="blog-single.php" rel="bookmark" itemprop="url">Introduction to Mindfulness Practice with Cator Shachoy</a>
													</h5>

													<a href="blog-single.php" class="small-title read-more-link">
														<span>Read more</span>
													</a>
												</div><!-- /.media-body -->

											</article><!-- /.post -->
										</div><!-- /.col-md-6 -->

										<div class="col-md-6">
											<article class="post has-post-thumbnail media" id="post-2" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
												<figure class="float-left entry-thumbnail">
													<img src="assets/demo/home/post-thumb-vert-2.jpg" alt="" itemprop="image" />
                          <a href="blog-single.php" class="pos-0 text-indent-full">Why the practice of Yoga should begin with Ayurveda</a>
												</figure>

												<div class="media-body">
													<p class="entry-time meta-date">
														<time class="small-title text-muted" itemprop="datePublished" datetime="2018-08-29T05:50:47+00:00">
															Aug 29, 2018
														</time>
													</p>

													<h5 class="entry-title" itemprop="headline">
														<a href="blog-single.php" rel="bookmark" itemprop="url">Why the practice of Yoga should begin with Ayurveda</a>
													</h5>

													<a href="blog-single.php" class="small-title read-more-link">
														<span>Read more</span>
													</a>
												</div><!-- /.media-body -->

											</article><!-- /.post -->
										</div><!-- /.col-md-6 -->

									</div><!-- /.row -->
								</div><!-- /.latest-news-boxes -->

                <p class="text-center mr-t-10">
                  <a href="javascript:void(0)" class="btn btn-lg btn-fancy px-4">
                    More news
                    <i class="feather-arrow-right fs-18 ml-3"></i>
                  </a>
                </p>

              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Call to Action -->
      <div id="home__cta-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-8 offset-md-2">

                <div class="element-cta element-cta-1" id="home__cta">

                  <h6 class="section-sub-heading-lines text-center">
                    <i class="vibes-vibes"></i>
                    <span class="title">Latest From Our Blog</span>
                  </h6><!-- /.section-sub-heading -->

                  <h4 class="text-uppercase fw-400 text-white" id="home__cta-heading" data-aos="zoom-in">Premium Collection</h4>

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

    </div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>

</div><!-- /.content-wrapper -->

<?php get_footer();
