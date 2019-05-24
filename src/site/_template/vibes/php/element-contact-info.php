<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . '',
  'title' => 'Contact Info',
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

			<!-- Contact Info -->
			<div id="contact-info-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

          	<div class="row">
          		<div class="col-md-6">
          			<div class="contact-info-icon-left">
          				<i class="feather-mail"></i>
          				<div class="contact-info-content">
          					<h5 class="contact-info-title">Email:</h5>
          					<span>hello@website.com</span>
          					<span>support@website.com</span>
          				</div><!-- /.contact-info-content -->
          			</div><!-- /.contact-info-icon-left -->
          		</div><!-- /.col-md-6 -->

          		<div class="col-md-6">
          			<div class="contact-info-icon-left">
          				<i class="feather-phone-call"></i>
          				<div class="contact-info-content">
          					<h5 class="contact-info-title">Phone:</h5>
          					<span>+ (605) 886-9664</span>
          					<span>+ (240) 420-5369</span>
          				</div><!-- /.contact-info-content -->
          			</div><!-- /.contact-info-icon-left -->
          		</div><!-- /.col-md-6 -->
          	</div><!-- /.row -->

          	<div class="row" id="contact-info-row">
          		<div class="col-md-6">
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

          		<div class="col-md-6">
          			<div class="contact-info-img-over">
          				<figure>
                    <img src="https://via.placeholder.com/600x420" alt="Los Angeles" />
          				</figure>

          				<div class="contact-info-content">
          					<h5 class="contact-info-title">London</h5>
          					<span>129 Guild Street</span>
          					<span>+ (079) 2801-1252</span>
          				</div><!-- /.contact-info-content -->
          			</div><!-- /.contact-info-img-over -->
          		</div><!-- /.col-md-6 -->
          	</div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>
  
</div><!-- /.content-wrapper -->
<?php get_footer();
