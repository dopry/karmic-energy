<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . '',
  'title' => 'Page not found',
  'scripts' => array(
    'animejs'
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

			<!-- Error 404 -->
			<div id="error-page__widget" class="widget-holder col-md-8 offset-md-2 p-0">
        <div class="widget-bg">
          <div class="widget-body container">
            <div class="error-page">
              <h1 class="error-title">404</h1>
              <h4 class="error-subtitle">Something's went wrong!</h4>
              <p>We can’t find the page your are looking for. You can check out our<br />
                <a href="#">Help Center</a> or head back to <a href="#">Homepage</a>.
              </p>
              <form action="javascript:void(0)" class="form error-search-form w-75">
                <div class="form-group">
                  <div class="input-group input-group-lg">
                    <input type="email" placeholder="Search this site..." class="form-control">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-primary">
                        <i class="feather-search"></i>
                      </button>
                    </div><!-- /.input-group-append -->
                  </div><!-- /.input-group -->
                </div><!-- /.form.group -->
              </form>
            </div><!-- /.error-page -->
					</div><!-- /.widget-body -->
				</div><!-- /.widget-bg -->
			</div><!-- /.widget-holder -->

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->
</div><!-- /.content-wrapper -->
<?php get_footer();
