<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . ' blog',
  'title' => 'Latest News',
  'scripts' => array(
  ),
  'styles' => array(
  )
);
get_header($config);
?>
<div class="content-wrapper">

  <?php get_page_title($config); ?>

  <div class="container main-wrapper clearfix">
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widget-list row">

      <main class="col-lg-8 main-content clearfix" itemscope="itemscope" itemtype="http://schema.org/Blog">

        <article class="post has-post-thumbnail text-center" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
          <!-- Featured Media -->
          <figure class="entry-thumbnail">
        		<img src="https://via.placeholder.com/1140x532" alt="" itemprop="image" />
        	</figure>

          <header class="entry-header">
        		<!-- Post Title -->
        		<h2 class="entry-title" itemprop="headline">
        			<a href="blog-single.php" rel="bookmark" itemprop="url">Top 10 tips for beginner yogis</a>
        		</h2>

        		<!-- Post Meta -->
        		<div class="entry-meta text-center">
            	<!-- Publish Date -->
            	<span class="entry-tiem meta-date">
            		<i class="feather-calendar"></i>
            		<time itemprop="datePublished" datetime="2018-09-22T05:50:47+00:00">
            			August 20, 2018
                </time>
            	</span>

            	<!-- Number of Comments -->
            	<span class="meta-reply">
            		<i class="feather-message-circle"></i>
            		<a href="blog-single.php#comments" class="comments-link" itemprop="discussionURL">9 Comments</a>
              </span>

            	<!-- Author Link -->
            	<span class="vcard author entry-author">
            		<i class="feather-user"></i>
            		<a class="url fn n" rel="author" href="blog-author.php">
            			Sylvia Harvey
                </a>
            	</span>
            </div><!-- /.entry-header-meta -->
          </header><!-- /.entry-header -->

        	<!-- Main Content of the Post -->
        	<div class="entry-content" itemprop="description">
        		<p>Donec ullamcorper lacus sed commodo tempus. Nullam efficitur suscipit erat in auctor. Nullam efficitur congue augue vel interdum. Fusce pretium feugiat sem. Sed lorem mauris, porttitor in lectus non, aliquam cursus magna. Fusce bibendum rutrum. Nulla nibh est, consequat vel tristique eu, ultrices eget lectus.</p>
        	</div><!-- /.entry-content -->

        	<footer class="entry-footer clearfix">
        		<a href="blog-single.php" class="read-more-link btn btn-fancy">
              Read more <i class="feather-arrow-right"></i>
            </a>
          </footer><!-- /.entry-footer -->
        </article><!-- /.post -->

        <article class="post has-post-thumbnail text-center" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
          <!-- Featured Media -->
          <figure class="entry-thumbnail">
        		<img src="https://via.placeholder.com/1140x532" alt="" itemprop="image" />
        	</figure>

          <header class="entry-header">
        		<!-- Post Title -->
        		<h2 class="entry-title" itemprop="headline">
        			<a href="blog-single.php" rel="bookmark" itemprop="url">Anatomy of the spine - lower back</a>
        		</h2>

        		<!-- Post Meta -->
        		<div class="entry-meta text-center">
            	<!-- Publish Date -->
            	<span class="entry-time meta-date">
            		<i class="feather-calendar"></i>
            		<time itemprop="datePublished" datetime="2018-09-22T05:50:47+00:00">
            			August 12, 2018
                </time>
            	</span>

            	<!-- Number of Comments -->
            	<span class="meta-reply">
            		<i class="feather-message-circle"></i>
            		<a href="blog-single.php#comments" class="comments-link" itemprop="discussionURL">9 Comments</a>
              </span>

            	<!-- Author Link -->
            	<span class="vcard author entry-author">
            		<i class="feather-user"></i>
            		<a class="url fn n" rel="author" href="blog-author.php">
            			Sylvia Harvey
                </a>
            	</span>
            </div><!-- /.entry-header-meta -->
          </header><!-- /.entry-header -->

        	<!-- Main Content of the Post -->
        	<div class="entry-content" itemprop="description">
        		<p>Donec ullamcorper lacus sed commodo tempus. Nullam efficitur suscipit erat in auctor. Nullam efficitur congue augue vel interdum. Fusce pretium feugiat sem. Sed lorem mauris, porttitor in lectus non, aliquam cursus magna. Fusce bibendum rutrum. Nulla nibh est, consequat vel tristique eu, ultrices eget lectus.</p>
        	</div><!-- /.entry-content -->

        	<footer class="entry-footer clearfix">
        		<a href="blog-single.php" class="read-more-link btn btn-fancy">
              Read more <i class="feather-arrow-right"></i>
            </a>
          </footer><!-- /.entry-footer -->
        </article><!-- /.post -->

        <article class="post has-post-thumbnail text-center" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
          <!-- Featured Media -->
          <figure class="entry-thumbnail">
        		<img src="https://via.placeholder.com/1140x532" alt="" itemprop="image" />
        	</figure>

          <header class="entry-header">
        		<!-- Post Title -->
        		<h2 class="entry-title" itemprop="headline">
        			<a href="blog-single.php" rel="bookmark" itemprop="url">How to keep your knees safe while doing yoga</a>
        		</h2>

        		<!-- Post Meta -->
        		<div class="entry-meta text-center">
            	<!-- Publish Date -->
            	<span class="entry-time meta-date">
            		<i class="feather-calendar"></i>
            		<time itemprop="datePublished" datetime="2018-09-22T05:50:47+00:00">
            			August 6, 2018
                </time>
            	</span>

            	<!-- Number of Comments -->
            	<span class="meta-reply">
            		<i class="feather-message-circle"></i>
            		<a href="blog-single.php#comments" class="comments-link" itemprop="discussionURL">9 Comments</a>
              </span>

            	<!-- Author Link -->
            	<span class="vcard author entry-author">
            		<i class="feather-user"></i>
            		<a class="url fn n" rel="author" href="blog-author.php">
            			Sylvia Harvey
                </a>
            	</span>
            </div><!-- /.entry-header-meta -->
          </header><!-- /.entry-header -->

        	<!-- Main Content of the Post -->
        	<div class="entry-content" itemprop="description">
        		<p>Donec ullamcorper lacus sed commodo tempus. Nullam efficitur suscipit erat in auctor. Nullam efficitur congue augue vel interdum. Fusce pretium feugiat sem. Sed lorem mauris, porttitor in lectus non, aliquam cursus magna. Fusce bibendum rutrum. Nulla nibh est, consequat vel tristique eu, ultrices eget lectus.</p>
        	</div><!-- /.entry-content -->

        	<footer class="entry-footer clearfix">
        		<a href="blog-single.php" class="read-more-link btn btn-fancy">
              Read more <i class="feather-arrow-right"></i>
            </a>
          </footer><!-- /.entry-footer -->
        </article><!-- /.post -->

        <nav class="site-pagination">
          <ul class="pager list-unstyled">
            <li class="current">1</li>
            <li><a href="blog.php">2</a></li>
            <li><a href="blog.php">3</a></li>
            <li><a href="blog.php"><i class="feather-chevron-right"></i></a></li>
          </ul>

          <span class="page-info">Page 1 of 3</span>
        </nav><!-- /.site-pagination -->

      </main><!-- /.main-content -->

      <aside class="col-lg-4 px-lg-5 sidebar widget-area clearfix" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">

        <section class="widget widget_search">
          <h6 class="widget-title">Search</h6>

          <form role="search" class="search-form">
            <label>
              <span class="screen-reader-text">Search for:</span>
              <input type="search" class="search-field" placeholder="Search …" value="" name="s">
            </label>
            <button type="submit" class="search-submit">
              <span class="screena-reader-text">Search</span>
            </button>
          </form>
        </section>

        <section class="widget widget_uni_social">
          <h6 class="widget-title">Social List</h6>

          <ul>
            <li class="uni_social_twitter">
              <a href="http://twitter.com" class="clearfix">
                <i class="unicon-twitter"></i>
                <strong>Twitter</strong>
                <span>386 Followers</span>
              </a>
            </li>

            <li class="uni_social_facebook">
              <a href="http://facebook.com" class="clearfix">
                <i class="unicon-facebook"></i>
                <strong>Facebook</strong>
                <span>14312 Likes</span>
              </a>
            </li>

            <li class="uni_social_instagram">
              <a href="http://instagram.com" class="clearfix">
                <i class="unicon-instagram"></i>
                <strong>Instagram</strong>
                <span>212 Followers</span>
              </a>
            </li>
          </ul>
        </section>

        <section class="widget widget_uni_posts">
          <h6 class="widget-title">Popular Posts</h6>

          <ul>
            <li>
              <a href="blog-single.php">
                <img src="https://via.placeholder.com/150" alt="" />
                <span class="content">
                  <strong>Top 10 tips for beginner yogis</strong>
                  <small>August 3, 2018</small>
                </span>
              </a>
      			</li>

            <li>
      				<a href="blog-single.php">
      					<img src="https://via.placeholder.com/150" alt="" />
                <span class="content">
                  <strong>Anatomy of the spine - lower back</strong>
                  <small>July 24, 2018</small>
                </span>
      				</a>
      			</li>

            <li>
      				<a href="blog-single.php">
      					<img src="https://via.placeholder.com/150" alt="" />
                <span class="content">
        					<strong>How to keep your knees safe while doing yoga</strong>
                  <small>April 24, 2018</small>
                </span>
      				</a>
      			</li>

            <li>
      				<a href="blog-single.php">
      					<img src="https://via.placeholder.com/150" alt="" />
                <span class="content">
                  <strong>Holistic massage for pain relief</strong>
                  <small>March 18, 2018</small>
                </span>
      				</a>
      			</li>
  				</ul>
      	</section>

        <section class="widget widget_tag_cloud">
          <h6 class="widget-title">Tag Cloud</h6>

          <div class="tagcloud">
            <ul class="wp-tag-cloud">
            	<li><a href="#" class="tag-cloud-link" style="font-size: 1em;">addiction</a></li>
            	<li><a href="#" class="tag-cloud-link" style="font-size: 1em;">beginners</a></li>
            	<li><a href="#" class="tag-cloud-link" style="font-size: 1em;">body</a></li>
            	<li><a href="#" class="tag-cloud-link" style="font-size: 1em;">fitness</a></li>
            	<li><a href="#" class="tag-cloud-link" style="font-size: 1em;">health</a></li>
            	<li><a href="#" class="tag-cloud-link" style="font-size: 1em;">mind</a></li>
            	<li><a href="#" class="tag-cloud-link" style="font-size: 1em;">nutrition</a></li>
            	<li><a href="#" class="tag-cloud-link" style="font-size: 1em;">posture</a></li>
            	<li><a href="#" class="tag-cloud-link" style="font-size: 1em;">yoga</a></li>
            </ul>
          </div>
        </section>

        <section class="widget widget_categories">
          <h6 class="widget-title">Categories</h6>

          <ul>
          	<li class="cat-item cat-item-11">
              <a href="http://localhost/vibes-wp/category/aroma-therapy/" >Aroma Therapy</a> (1)
            </li>

            <li class="cat-item cat-item-12">
              <a href="http://localhost/vibes-wp/category/facial-massage/" >Facial Massage</a> (1)
            </li>

            <li class="cat-item cat-item-7">
              <a href="http://localhost/vibes-wp/category/massage-therapy/" >Massage Therapy</a> (1)
            </li>

            <li class="cat-item cat-item-8">
              <a href="http://localhost/vibes-wp/category/news-updates/" >News &amp; updates</a> (3)
            </li>

            <li class="cat-item cat-item-16">
              <a href="http://localhost/vibes-wp/category/top-spa-centers/" >Top Spa Centers</a> (1)
            </li>

            <li class="cat-item cat-item-1">
              <a href="http://localhost/vibes-wp/category/uncategorized/" >Uncategorized</a> (1)
            </li>

            <li class="cat-item cat-item-2">
              <a href="http://localhost/vibes-wp/category/yoga-fitness/" >Yoga Fitness</a> (2)
            </li>
        	</ul>
        </section><!-- /.widget_categories -->
      </aside><!-- /.sidebar -->

    </div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>

</div><!-- /.content-wrapper -->
<?php get_footer();
