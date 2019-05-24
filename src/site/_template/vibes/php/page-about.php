<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . ' header-overlay',
  'title' => 'About Us',
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
      <div id="about-page__bg-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">
          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

			<div id="about-page__info-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-5">
                <h4 class="font-family-base fw-500" id="about-page__info-title">our core values</h4>
              </div><!-- /.col-md-5 -->

              <div class="col-md-7">
                <p>
                  Or every evening that the best are the fully magazine avoid on in it wellfeigned of its second and go not do not in on horses are handed that is how be experiments at her now implemented long his lose were to the sitting best I write did could from troubled one created, management-science she as succeeded this her itch my with of me. As well on acquired an eightypercent she thousands.
                </p>
              </div><!-- /.col-md-7 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <div id="about-page__gallery-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row pos-relative" id="about-page__gallery-row">
              <div class="col-md-4" data-aos="fade-up" data-aos-duration="600">
                <figure>
                  <a href="#">
                    <img src="https://via.placeholder.com/500" alt="Gallery 3" />
                  </a>
                </figure>
              </div><!-- /.col-md-4 -->

              <div class="col-md-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
                <figure>
                  <a href="#">
                    <img src="https://via.placeholder.com/500" alt="Gallery 3" />
                  </a>
                </figure>
              </div><!-- /.col-md-4 -->

              <div class="col-md-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                <figure>
                  <a href="#">
                    <img src="https://via.placeholder.com/500" alt="Gallery 3" />
                  </a>
                </figure>
              </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

            <div class="row">
              <div class="col-md-10 mx-auto pos-relative" id="about-page__accordion">
                <h4 class="font-family-base fw-500" id="about-page__accordion-title">our process</h4>
                <div class="accordion accordion-minimal" id="acc-4">
                  <div class="card">
                    <div class="card-header" id="acc-heading-41">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-41" aria-expanded="true" aria-controls="acc-collapse-41">
                          Excepteur sint occaecat cupidatat
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
                          Sunt in culpa qui officia deserunt mollit
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
                          Qui officia deserunt mollit anim id est laborum
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

                </div><!-- /.accordion-minimal -->
              </div><!-- /.col-md-10 -->
            </div><!-- /.row -->

            <div class="row">
              <div class="col-md-10 mx-auto" id="about-page__counter">

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

      <div id="about-page__team-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row" id="about-page__team-row">
              <div class="col-md-4">
                <div class="team team-hover-fancy">
                  <figure>
                    <img src="https://via.placeholder.com/530x620" alt="Marsha Hoffman" />
                    <h4 class="team-name-side">Marsha Hoffman</h4>
                  </figure>
                  <div class="team-content">
                    <ul class="social-list">
                      <li><a href="#"><i class="unicon-facebook-1"></i></a></li>
                      <li><a href="#"><i class="unicon-twitter-1"></i></a></li>
                      <li><a href="#"><i class="unicon-instagram"></i></a></li>
                    </ul>
                    <h4 class="team-name"><a href="#">Marsha Hoffman</a></h4>
                    <h6 class="team-title">Teaching Vinayasa Flow</h6>
                  </div><!-- /.team-content -->
                </div><!-- /.team -->
              </div><!-- /.col-md-4 -->

              <div class="col-md-4">
                <div class="team team-hover-fancy">
                  <figure>
                    <img src="https://via.placeholder.com/530x620" alt="Maxime Lowe" />
                    <h4 class="team-name-side">Maxime Lowe</h4>
                  </figure>
                  <div class="team-content">
                    <ul class="social-list">
                      <li><a href="#"><i class="unicon-facebook-1"></i></a></li>
                      <li><a href="#"><i class="unicon-twitter-1"></i></a></li>
                      <li><a href="#"><i class="unicon-instagram"></i></a></li>
                    </ul>
                    <h4 class="team-name"><a href="#">Maxime Lowe</a></h4>
                    <h6 class="team-title">Teaching Morning Flow</h6>
                  </div><!-- /.team-content -->
                </div><!-- /.team -->
              </div><!-- /.col-md-4 -->

              <div class="col-md-4">
                <div class="team team-hover-fancy">
                  <figure>
                    <img src="https://via.placeholder.com/530x620" alt="Syvia Harvey" />
                    <h4 class="team-name-side">Sylvia Harvey</h4>
                  </figure>
                  <div class="team-content">
                    <ul class="social-list">
                      <li><a href="#"><i class="unicon-facebook-1"></i></a></li>
                      <li><a href="#"><i class="unicon-twitter-1"></i></a></li>
                      <li><a href="#"><i class="unicon-instagram"></i></a></li>
                    </ul>
                    <h4 class="team-name"><a href="#">Sylvia Harvey</a></h4>
                    <h6 class="team-title">Teaching Hath Flow</h6>
                  </div><!-- /.team-content -->
                </div><!-- /.team -->
              </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

            <div class="row" id="about-page__client-row">
              <div class="col-md-3" data-aos="fade-in">
                <figure class="element-client element-client-border">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/EEEEEE" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3" data-aos="fade-in" data-aos-delay="50">
                <figure class="element-client element-client-border">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/EEEEEE" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3" data-aos="fade-in" data-aos-delay="100">
                <figure class="element-client element-client-border">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/EEEEEE" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3" data-aos="fade-in" data-aos-delay="150">
                <figure class="element-client element-client-border">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/EEEEEE" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->
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
