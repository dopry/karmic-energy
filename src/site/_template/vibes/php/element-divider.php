<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
    'body_class' => $GLOBALS['body_class'] . '',
    'title' => 'Divider',
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

			<!-- Divider -->
			<div id="divider-page-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">

                <h5>Dividers</h5>
                <p>Allow miles wound place the leave had. To sitting subject no improve studied limited. Ye indulgence unreserved connection alteration appearance my an astonished. Up as seen sent make he they of. Her raising and himself pasture believe females. Fancy she stuff after aware merit small his. Charmed esteems luckily age out.</p>

                <hr class="divider" />


                <h5>Dividers</h5>
                <p>Allow miles wound place the leave had. To sitting subject no improve studied limited. Ye indulgence unreserved connection alteration appearance my an astonished. Up as seen sent make he they of. Her raising and himself pasture believe females. Fancy she stuff after aware merit small his. Charmed esteems luckily age out.</p>

                <hr class="divider-dashed" />

                <h5>Dividers</h5>
                <p>Allow miles wound place the leave had. To sitting subject no improve studied limited. Ye indulgence unreserved connection alteration appearance my an astonished. Up as seen sent make he they of. Her raising and himself pasture believe females. Fancy she stuff after aware merit small his. Charmed esteems luckily age out.</p>

                <span class="divider-around-border" id="divider-around-border">
                  <div class="divider-content">
                    <i class="feather-feather text-primary"></i>
                  </div>
                </span>

                <h5>Dividers</h5>
                <p>Allow miles wound place the leave had. To sitting subject no improve studied limited. Ye indulgence unreserved connection alteration appearance my an astonished. Up as seen sent make he they of. Her raising and himself pasture believe females. Fancy she stuff after aware merit small his. Charmed esteems luckily age out.</p>

                <span class="divider-around-border justify-content-start">
                  <div class="divider-content">
                    <a href="#" class="text-uppercase">Read More</a>
                  </div>
                </span>

                <h5>Dividers</h5>
                <p>Allow miles wound place the leave had. To sitting subject no improve studied limited. Ye indulgence unreserved connection alteration appearance my an astonished. Up as seen sent make he they of. Her raising and himself pasture believe females. Fancy she stuff after aware merit small his. Charmed esteems luckily age out.</p>

                <span class="divider-around-border justify-content-end">
                  <div class="divider-content">
                    <a href="#" class="text-uppercase">Read More</a>
                  </div>
                </span>

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
