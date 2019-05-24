<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
    'body_class' => $GLOBALS['body_class'] . '',
    'title' => 'Team',
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

			<!-- Team Members -->
			<div id="team-page__fancy-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row" id="team-page__fancy-row">
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

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>
  
</div><!-- /.content-wrapper -->
<?php get_footer();
