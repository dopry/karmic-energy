<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . '',
  'title' => 'Accordion',
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

      <!-- Accordion Default -->
      <div id="accordion__default-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-8 offset-md-2">
                <div class="accordion accordion-default" id="acc-1">
                  <div class="card">
                    <div class="card-header" id="acc-heading-11">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-11" aria-expanded="true" aria-controls="acc-collapse-11">Collapsible Group Item #1
                        </button>
                      </h5>
                    </div>

                    <div id="acc-collapse-11" class="collapse show" aria-labelledby="acc-heading-11" data-parent="#acc-1">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                  <div class="card">
                    <div class="card-header" id="acc-heading-12">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-12" aria-expanded="false" aria-controls="acc-collapse-12">Collapsible Group Item #2
                        </button>
                      </h5>
                    </div>
                    <div id="acc-collapse-12" class="collapse" aria-labelledby="acc-heading-32" data-parent="#acc-1">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                  <div class="card">
                    <div class="card-header" id="acc-heading-13">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-13" aria-expanded="false" aria-controls="acc-collapse-13">Collapsible Group Item #3
                        </button>
                      </h5>
                    </div><!-- /.card-reader -->

                    <div id="acc-collapse-13" class="collapse" aria-labelledby="acc-heading-13" data-parent="#acc-1">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                </div><!-- /.accordion-default -->
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Accordion Shadow -->
      <div id="accordion__shadow-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Accordion Shadow</span>
                </h2>
              </div>

              <div class="col-md-8 offset-md-2">
                <div class="accordion accordion-shadow" id="acc-2">
                  <div class="card">
                    <div class="card-header" id="acc-heading-21">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-21" aria-expanded="true" aria-controls="acc-collapse-21">
                          Collapsible Group Item #1
                        </button>
                      </h5>
                    </div>

                    <div id="acc-collapse-21" class="collapse show" aria-labelledby="acc-heading-21" data-parent="#acc-2">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                  <div class="card">
                    <div class="card-header" id="acc-heading-22">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-22" aria-expanded="false" aria-controls="acc-collapse-22">
                          Collapsible Group Item #2
                        </button>
                      </h5>
                    </div>
                    <div id="acc-collapse-22" class="collapse" aria-labelledby="acc-heading-22" data-parent="#acc-2">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                  <div class="card">
                    <div class="card-header" id="acc-heading-23">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-23" aria-expanded="false" aria-controls="acc-collapse-23">
                          Collapsible Group Item #3
                        </button>
                      </h5>
                    </div><!-- /.card-reader -->

                    <div id="acc-collapse-23" class="collapse" aria-labelledby="acc-heading-23" data-parent="#acc-2">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                </div><!-- /.accordion-shadow -->
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Accordion Border -->
      <div id="accordion__border-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Accordion Border</span>
                </h2>
              </div>

              <div class="col-md-8 offset-md-2">
                <div class="accordion accordion-border" id="acc-3">
                  <div class="card">
                    <div class="card-header" id="acc-heading-31">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-31" aria-expanded="true" aria-controls="acc-collapse-31">
                          Collapsible Group Item #1
                        </button>
                      </h5>
                    </div>

                    <div id="acc-collapse-31" class="collapse show" aria-labelledby="acc-heading-31" data-parent="#acc-3">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                  <div class="card">
                    <div class="card-header" id="acc-heading-32">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-32" aria-expanded="false" aria-controls="acc-collapse-32">
                          Collapsible Group Item #2
                        </button>
                      </h5>
                    </div>
                    <div id="acc-collapse-32" class="collapse" aria-labelledby="acc-heading-32" data-parent="#acc-3">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                  <div class="card">
                    <div class="card-header" id="acc-heading-33">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#acc-collapse-33" aria-expanded="false" aria-controls="acc-collapse-33">
                          Collapsible Group Item #3
                        </button>
                      </h5>
                    </div><!-- /.card-reader -->

                    <div id="acc-collapse-33" class="collapse" aria-labelledby="acc-heading-33" data-parent="#acc-3">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div><!-- /.collapse -->
                  </div><!-- /.card -->

                </div><!-- /.accordion-shadow -->
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Accordion Minimal -->
      <div id="accordion__minimal-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Accordion Minimal</span>
                </h2>
              </div>

              <div class="col-md-8 offset-md-2">

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
