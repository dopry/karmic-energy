<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . '',
  'title' => 'Coming Soon',
  'scripts' => array(
    'animejs',
    'countdown',
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

			<!-- Coming Soon -->
			<div id="coming-soon-widget" class="widget-holder col-md-6 mx-auto p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="coming-soon-page">
              <h2 class="coming-soon-title">
                Coming Soon
              </h2>

              <p>Make sure to signup to our newsletter to recieve updates on the<br /> status and other notificiation</p>

              <form action="javascript:void(0)" class="form newsletter-form w-100">
                <div class="form-group">
                  <div class="input-group input-group-lg">
                    <input type="email" placeholder="Enter email address..." class="form-control">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-primary">
                        <i class="feather-chevron-right"></i>
                      </button>
                    </div><!-- /.input-group-append -->
                  </div><!-- /.input-group -->
                </div><!-- /.form.group -->
              </form>

              <div class="countdown countdown-minimal" 
                  id="coming-soon__countdown"
                  data-plugin-options='{"finalDate": "12/31/2019 00:00:00"}'>
                <span class="countdown-content">
                  <span><strong>%D</strong> day%!D</span>
                  <span><strong>%H</strong> hour%!H</span>
                  <span><strong>%M</strong> month%!M</span>
                  <span><strong>%S</strong> second%!S</span>
                </span>
                <span class="countdown-completed-content">
                  Welcome to the future
                </span>
              </div>

              <div class="social-links">
                <ul class="social-list">
                  <li>
                  <a href="#">
                    <i class="unicon-facebook text-facebook"></i>
                    <span>38</span>
                    <small>likes</small>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="unicon-twitter text-twitter"></i>
                    <span>72</span>
                    <small>Retweets</small>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="unicon-instagram text-instagram"></i>
                    <span>30</span>
                    <small>likes</small>
                  </a>
                </li>
                </ul><!-- /.social-list -->
              </div><!-- /.social-links -->
            </div><!-- /.coming-soon-page -->


					</div><!-- /.widget-body -->
				</div><!-- /.widget-bg -->
			</div><!-- /.widget-holder -->

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>
  
</div><!-- /.content-wrapper -->
<?php get_footer();
