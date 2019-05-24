<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . '',
  'title' => 'FAQ',
  'scripts' => array(
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

			<div id="faq-page__title-widget" class="widget-holder col-md-12 mx-auto p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-12 text-center">
                <h4 id="faq-page__title" class="font-family-base fw-500">Have any questions?</h4>
                <p class="mr-b-60">Browse through the most frequently asked question</p>
                <button class="btn btn-sm btn-circle btn-secondary scroll-to-element" id="faq-page__title-scroll-btn" data-scroll-to="#faq-page__accordion-widget" data-scroll-to-duration="800"><i class="feather-chevron-down"></i></button>
              </div><!-- /.col-12 -->
            </div><!-- /.row -->

					</div><!-- /.widget-body -->
				</div><!-- /.widget-bg -->
			</div><!-- /.widget-holder -->

      <!-- Accordion -->
      <div id="faq-page__accordion-widget" class="widget-holder col-md-12 mx-auto p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-8 mx-auto">

                <div class="accordion accordion-minimal" id="acc-4">
                  <div class="card">
                    <div class="card-header" id="acc-heading-41">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-41" aria-expanded="true" aria-controls="acc-collapse-41">
                          I'm new to yoga. Where should I start?
                        </button>
                      </h5>
                    </div>

                    <div id="acc-collapse-41" class="collapse show" aria-labelledby="acc-heading-41" data-parent="#acc-4">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                  <div class="card">
                    <div class="card-header" id="acc-heading-42">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-42" aria-expanded="false" aria-controls="acc-collapse-42">
                          What classes do you offer?
                        </button>
                      </h5>
                    </div>
                    <div id="acc-collapse-42" class="collapse" aria-labelledby="acc-heading-42" data-parent="#acc-4">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                  <div class="card">
                    <div class="card-header" id="acc-heading-43">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-43" aria-expanded="false" aria-controls="acc-collapse-43">
                          How many students are there in any course?
                        </button>
                      </h5>
                    </div><!-- /.card-reader -->

                    <div id="acc-collapse-43" class="collapse" aria-labelledby="acc-heading-43" data-parent="#acc-4">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                  <div class="card">
                    <div class="card-header" id="acc-heading-44">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-44" aria-expanded="false" aria-controls="acc-collapse-44">
                          Do you offer private classes?
                        </button>
                      </h5>
                    </div><!-- /.card-reader -->

                    <div id="acc-collapse-44" class="collapse" aria-labelledby="acc-heading-44" data-parent="#acc-4">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                  <div class="card">
                    <div class="card-header" id="acc-heading-45">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-45" aria-expanded="false" aria-controls="acc-collapse-45">
                          What are the different subscription plans?
                        </button>
                      </h5>
                    </div><!-- /.card-reader -->

                    <div id="acc-collapse-45" class="collapse" aria-labelledby="acc-heading-45" data-parent="#acc-4">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                  <div class="card">
                    <div class="card-header" id="acc-heading-46">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-46" aria-expanded="false" aria-controls="acc-collapse-46">
                          Which payment methods do you accept?
                        </button>
                      </h5>
                    </div><!-- /.card-reader -->

                    <div id="acc-collapse-46" class="collapse" aria-labelledby="acc-heading-46" data-parent="#acc-4">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                </div><!-- /.accordion-minimal -->

              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Contact Info -->
      <div id="faq-page__contact-info-widget" class="widget-holder col-md-12">
        <div class="widget-bg">
          <div class="widget-body container">

              <div class="row">
                <div class="col-md-8 mx-auto text-center">
                  <h4 class="font-family-base fw-500">Still have any questions?</h4>
                  <p class="mr-b-60">You can always reach us in case you can't find answers to your questions</p>
                </div><!-- /.col-md-8 -->

                <div class="col-md-8 mx-auto">
                  <div class="row no-gutters">
                    <div class="col-md-6">
                      <div class="contact-info-icon-left" id="faq-page__contact-info-1">
                        <i class="feather-phone-call"></i>
                        <div class="contact-info-content">
                          <h5 class="contact-info-title">Phone:</h5>
                          <span>+ (605) 886-9664</span>
                          <span>+ (240) 420-5369</span>
                        </div><!-- /.contact-info-content -->
                      </div><!-- /.contact-info-icon-left -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                      <div class="contact-info-icon-left" id="faq-page__contact-info-2">
                        <i class="feather-mail"></i>
                        <div class="contact-info-content">
                          <h5 class="contact-info-title">Email:</h5>
                          <span>hello@website.com</span>
                          <span>support@website.com</span>
                        </div><!-- /.contact-info-content -->
                      </div><!-- /.contact-info-icon-left -->
                    </div><!-- /.col-md-6 -->
                  </div><!-- /.row -->
                </div><!-- /.col-md-8 -->
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
