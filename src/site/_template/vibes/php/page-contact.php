<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . ' header-overlay',
  'title' => 'Contact Us',
  'scripts' => array(
    'countup'
  ),
  'styles' => array(
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
      <div id="contact-page__bg-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">
          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

			<div id="contact-page__title-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-5">
                <h4 class="font-family-base fw-500" id="contact-page__title">our core values</h4>
                <p>We would love to hear from you. Whether you want more information on our classes or want to attend any events that we hold, just give us a quick call.</p>
              </div><!-- /.col-md-5 -->

              <div class="col-md-3 ml-auto">
                <div class="contact-info-icon-left">
                  <i class="feather-mail"></i>
                  <div class="contact-info-content">
                    <h5 class="contact-info-title">Email:</h5>
                    <span>hello@website.com</span>
                    <span>support@website.com</span>
                  </div><!-- /.contact-info-content -->
                </div><!-- /.contact-info-icon-left -->
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <div class="contact-info-icon-left">
                  <i class="feather-phone-call"></i>
                  <div class="contact-info-content">
                    <h5 class="contact-info-title">Phone:</h5>
                    <span>+ (605) 886-9664</span>
                    <span>+ (240) 420-5369</span>
                  </div><!-- /.contact-info-content -->
                </div><!-- /.contact-info-icon-left -->
              </div><!-- /.col-md-3 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <div id="contact-page__contact-info-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row pos-relative" id="contact-page__contact-info-row">
              <div class="col-md-6" data-aos="fade-up">
                <div class="contact-info-img-over">
                  <figure>
                    <img src="https://via.placeholder.com/600x420" alt="Los Angeles" />
                  </figure>

                  <div class="contact-info-content">
                    <h5 class="contact-info-title">Los Angeles</h5>
                    <span>Peace Awareness Labyrinth</span>
                    <span>+ (605) 886-9664</span>
                  </div><!-- /.contact-info-content -->
                </div><!-- /.contact-info-img-over -->
              </div><!-- /.col-md-6 -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="50">
                <div class="contact-info-img-over">
                  <figure>
                    <img src="https://via.placeholder.com/600x420" alt="London" />
                  </figure>

                  <div class="contact-info-content">
                    <h5 class="contact-info-title">London</h5>
                    <span>129 Guild Street</span>
                    <span>+ (079) 2801-1252</span>
                  </div><!-- /.contact-info-content -->
                </div><!-- /.contact-info-img-over -->
              </div><!-- /.col-md-6 -->
            </div><!-- /.row -->

            <div class="row">
              <div class="col-md-10 mx-auto pos-relative" id="contact-page__form">
                <h4 class="font-family-base fw-500">let's talk</h4>

                <form action="javascript:void(0)">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <div class="input-group">
                        <input type="text" name="name" placeholder="Name" class="form-control" />
                      </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <div class="form-group col-md-6">
                      <div class="input-group">
                        <input type="email" name="email" placeholder="Email" class="form-control" />
                      </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                  </div><!-- /.form-row -->

                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="subject" placeholder="Subject" class="form-control" />
                    </div><!-- /.input-group -->
                  </div><!-- /.form-group -->

                  <div class="form-group">
                    <div class="input-group">
                      <textarea placeholder="Message" name="message" class="form-control" rows="5"></textarea>
                    </div><!-- /.input-group -->
                  </div><!-- /.form-group -->

                  <button type="submit" class="btn btn-fancy btn-block fs-14 py-3">Send Message <i class="feather-arrow-right"></i></button>
                </form>

              </div><!-- /.col-md-10 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Gallery -->
      <div id="contact-page__gallery-widget" class="widget-holder col-md-12 p-0">
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
                        <img src="assets/demo/gallery/gallery-<?= $i ?>.jpg" alt="Gallery <?= $i ?>" />
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
                      <img src="assets/demo/gallery/gallery-1.jpg" alt="Gallery 1" />
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
