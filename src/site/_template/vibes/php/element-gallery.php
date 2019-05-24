<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
	'body_class' => $GLOBALS['body_class'] . '',
	'title' => 'Gallery',
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

      <!-- Default -->
      <div id="gallery-page-widget" class="widget-holder col-md-12 p-0">
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

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>
  
</div><!-- /.content-wrapper -->

<?php get_footer();
