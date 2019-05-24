<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . '',
  'title' => 'Clients',
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

			<!-- Default Clients -->
			<div id="clients-page__default-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-3">
                <figure class="element-client element-client-default">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/999999/909090" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <figure class="element-client element-client-default">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/999999/909090" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <figure class="element-client element-client-default">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/999999/909090" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <figure class="element-client element-client-default">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/999999/909090" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->
            </div><!-- /.row -->

					</div><!-- /.widget-body -->
				</div><!-- /.widget-bg -->
			</div><!-- /.widget-holder -->

      <!-- Clients Monotone -->
			<div id="clients-page__monotone-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Clients Monotone</span>
                </h2>
              </div>
            </div><!-- /.row -->

            <div class="row">
              <div class="col-md-3">
                <figure class="element-client element-client-monotone">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/999999/909090" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <figure class="element-client element-client-monotone">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/999999/909090" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <figure class="element-client element-client-monotone">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/999999/909090" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <figure class="element-client element-client-monotone">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/999999/909090" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->
            </div><!-- /.row -->

					</div><!-- /.widget-body -->
				</div><!-- /.widget-bg -->
			</div><!-- /.widget-holder -->

      <!-- Clients Border-->
      <div id="clients-page__border-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Clients Border</span>
                </h2>
              </div>
            </div><!-- /.row -->

            <div class="row">
              <div class="col-md-3">
                <figure class="element-client element-client-border">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/E9E9E9" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <figure class="element-client element-client-border">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/E9E9E9" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <figure class="element-client element-client-border">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/E9E9E9" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <figure class="element-client element-client-border">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/E9E9E9" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Clients Table -->
      <div id="clients-page__table-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Clients Table</span>
                </h2>
              </div>
            </div><!-- /.row -->

            <div class="row no-gutters" id="clients-page__table-first-row">
              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->
            </div><!-- /.row -->

            <div class="row no-gutters">
              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Clients Grid -->
      <div id="clients-page__grid-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container-fluid">

            <div class="row">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Clients Grid</span>
                </h2>
              </div>
            </div><!-- /.row -->

            <div class="row" id="clients-page__grid-first-row">
              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid pd-tb-40">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid pd-tb-40">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid pd-tb-40">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid pd-tb-40">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->
            </div><!-- /.row -->

            <div class="row" id="clients-page__grid-last-row">
              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid pd-tb-40">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid pd-tb-40">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid pd-tb-40">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 pd-0">
                <figure class="element-client element-client-grid pd-tb-40">
                  <a href="#">
                    <img src="https://via.placeholder.com/300x150/FFFFFF/CCCCCC" height="150" width="300" alt="" />
                  </a>
                </figure>
              </div><!-- /.col-md-3 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>
  
</div><!-- /.content-wrapper -->
<?php get_footer();
