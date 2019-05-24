<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
	'body_class' => $GLOBALS['body_class'] . '',
	'title' => 'Icon Boxes',
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
      <div id="icon-box-page__default-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-4">
                <div class="icon-box icon-box-lg icon-box-minimal text-center">
                  <figure>
                    <i class="vibes-relax text-tertiary"></i>
                  </figure>

                  <div>
                    <h6>Curate with Boards</h6>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div><!-- /.icon-box-minimal -->
              </div><!-- /.col-md-4 -->

              <div class="col-md-4">
                <div class="icon-box icon-box-lg icon-box-minimal text-center">
                  <figure>
                    <i class="vibes-lotus-1 text-tertiary"></i>
                  </figure>

                  <div>
                    <h6>Manage Accounts</h6>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div><!-- /.icon-box-minimal -->
              </div><!-- /.col-md-4 -->

              <div class="col-md-4">
                <div class="icon-box icon-box-lg icon-box-minimal text-center">
									<figure>
                    <i class="vibes-bed text-tertiary"></i>
                  </figure>

                  <div>
                     <h6>Work in Teams</h6>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div><!-- /.icon-box-minimal -->
              </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

			<!-- Circle -->
			<div id="icon-box-page__circle-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">

                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Icon boxes circle</span>
                </h2>

              	<div class="row">
                  <div class="col-md-4">
		                <div class="media icon-box icon-box-circle">
		                  <figure class="bg-success">
		                    <i class="vibes-bathtub text-white"></i>
		                  </figure>

		                  <div class="media-body">
		                    <h6>Curate with Boards</h6>
		                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		                  </div>
		                </div><!-- /.icon-box-minimal -->
		              </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                    <div class="media icon-box icon-box-circle">
                      <figure class="bg-info">
                        <i class="vibes-bathtub-2 text-white"></i>
                      </figure>

                      <div class="media-body">
                        <h6>Manage Accounts</h6>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                      </div>
                    </div><!-- /.icon-box-circle -->
                  </div><!-- /.col-md-4 -->

                	<div class="col-md-4">
                    <div class="media icon-box icon-box-circle">
                      <figure class="bg-primary">
                        <i class="vibes-stones-2 text-white"></i>
                      </figure>

                      <div class="media-body">
                        <h6>Work in Teams</h6>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                      </div>
                    </div><!-- /.icon-box-circle -->
                  </div><!-- /.col-md-4 -->
              	</div><!-- /.row -->

							</div><!-- /.col-md-12 -->
            </div><!-- /.row -->

					</div><!-- /.widget-body -->
				</div><!-- /.widget-bg -->
			</div><!-- /.widget-holder -->

      <!-- Circle Border -->
      <div id="icon-box-page__circle-border-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">

                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Icon boxes border</span>
                </h2>

								<div class="row">
									<div class="col-md-4">
		                <div class="media icon-box icon-box-border">
											<figure>
												<i class="vibes-towel text-tertiary"></i>
											</figure>

											<div class="media-body">
												<h6>Curate with Boards</h6>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											</div>
										</div><!-- /.icon-box-minimal -->
									</div><!-- /.col-md-4 -->

									<div class="col-md-4">
		                <div class="media icon-box icon-box-border">
											<figure>
												<i class="vibes-lotus text-tertiary"></i>
											</figure>

											<div class="media-body">
												<h6>Manage Accounts</h6>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											</div>
										</div><!-- /.icon-box-minimal -->
									</div><!-- /.col-md-4 -->

									<div class="col-md-4">
		                <div class="media icon-box icon-box-border">
											<figure>
												<i class="vibes-spa text-tertiary"></i>
											</figure>

											<div class="media-body">
												<h6>Work in Teams</h6>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											</div>
										</div><!-- /.icon-box-minimal -->
									</div><!-- /.col-md-4 -->
                </div><!-- /.row -->

              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Circle Border -->
      <div class="widget-holder col-md-12 p-0" id="icon-box-page__circle-border-widget">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row no-gutters">
              <div class="col-md-12">
                <h2 class="fancy-heading mr-b-50 text-center">
                  <span>Icon boxes Fancy</span>
                </h2>
              </div><!-- /.col-md-12 -->

              <div class="col-md-3">
                <div class="media icon-box icon-box-fancy">
                  <figure>
                    <i class="vibes-towel text-tertiary"></i>
                  </figure>

                  <div class="media-body">
                    <h6>Curate with Boards</h6>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div><!-- /.icon-box-minimal -->
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <div class="media icon-box icon-box-fancy">
                  <figure>
                    <i class="vibes-lotus text-tertiary"></i>
                  </figure>

                  <div class="media-body">
                    <h6>Manage Accounts</h6>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div><!-- /.icon-box-minimal -->
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <div class="media icon-box icon-box-fancy">
                  <figure>
                    <i class="vibes-spa text-tertiary"></i>
                  </figure>

                  <div class="media-body">
                    <h6>Work in Teams</h6>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div><!-- /.icon-box-minimal -->
              </div><!-- /.col-md-3 -->

              <div class="col-md-3">
                <div class="media icon-box icon-box-fancy">
                  <figure>
                    <i class="vibes-stones-2 text-tertiary"></i>
                  </figure>

                  <div class="media-body">
                    <h6>Illustration</h6>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div><!-- /.icon-box-minimal -->
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
