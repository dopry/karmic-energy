<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
	'body_class' => $GLOBALS['body_class'] . '',
	'title' => 'Blogposts',
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

			<!-- Blogpost Mediabox -->
			<div id="blogposts-page__mediabox-widget" class="widget-holder col-md-12 p-0">
				<div class="widget-bg">
					<div class="widget-body container">

						<div class="row">
							<div class="col-md-12">

								<div class="blogpost-thumbs blogpost-mediabox mr-t-60">
									<div class="row">

										<div class="col-md-6">
											<article class="post has-post-thumbnail media" id="post-1" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
												<figure class="float-left entry-thumbnail">
													<img src="assets/demo/home/post-thumb-vert-1.jpg" alt="" itemprop="image" />
                          <a href="blog-single.php" class="pos-0 text-indent-full">Introduction to Mindfulness Practice with Cator Shachoy</a>
												</figure>

												<main class="media-body">
													<p class="entry-time meta-date">
														<time class="small-title text-muted" itemprop="datePublished" datetime="2018-08-29T05:50:47+00:00">
															Sep 23, 2018
														</time>
													</p>

													<h5 class="entry-title" itemprop="headline">
														<a href="blog-single.php" rel="bookmark" itemprop="url">Introduction to Mindfulness Practice with Cator Shachoy</a>
													</h5>

													<a href="blog-single.php" class="small-title read-more-link">
														<span>Read more</span>
													</a>
												</main><!-- /.media-body -->

											</article><!-- /.post -->
										</div><!-- /.col-md-6 -->

										<div class="col-md-6">
											<article class="post has-post-thumbnail media" id="post-2" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
												<figure class="float-left entry-thumbnail">
													<img src="assets/demo/home/post-thumb-vert-2.jpg" alt="" itemprop="image" />
                          <a href="blog-single.php" class="pos-0 text-indent-full">Why the practice of Yoga should begin with Ayurveda</a>
												</figure>

												<main class="media-body">
													<p class="entry-time meta-date">
														<time class="small-title text-muted" itemprop="datePublished" datetime="2018-08-29T05:50:47+00:00">
															Aug 29, 2018
														</time>
													</p>

													<h5 class="entry-title" itemprop="headline">
														<a href="blog-single.php" rel="bookmark" itemprop="url">Why the practice of Yoga should begin with Ayurveda</a>
													</h5>

													<a href="blog-single.php" class="small-title read-more-link">
														<span>Read more</span>
													</a>
												</main><!-- /.media-body -->

											</article><!-- /.post -->
										</div><!-- /.col-md-6 -->

									</div><!-- /.row -->
								</div><!-- /.latest-news-boxes -->

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
