<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
  'body_class' => $GLOBALS['body_class'] . ' single single-post',
  'title' => 'Top 10 tips for beginner yogis',
  'scripts' => array(
  ),
  'styles' => array(
  )
);
get_header($config);
?>
<div class="content-wrapper">

  <?php get_page_title_alt($config); ?>

  <div class="container main-wrapper clearfix">
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widget-list row">

      <main class="col-lg-8 main-content clearfix" itemscope="itemscope" itemtype="http://schema.org/Blog">

        <article class="post has-post-thumbnail" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

          <header class="entry-header text-center">
        		<!-- Post Title -->
        		<h2 class="entry-title" itemprop="headline">
        			Top 10 tips for beginner yogis
        		</h2>

        		<!-- Post Meta -->
        		<div class="entry-meta text-center">
            	<!-- Publish Date -->
            	<span class="entry-time meta-date">
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

          <!-- Featured Media -->
          <figure class="entry-thumbnail">
        		<img src="https://via.placeholder.com/1140x532" alt="" itemprop="image" />
        	</figure>

        	<!-- Main Content of the Post -->
        	<div class="entry-content first-char-large" itemprop="articleBody">
        		<p>Donec ullamcorper lacus sed commodo tempus. Nullam efficitur suscipit erat in auctor. Nullam efficitur congue augue vel interdum. Fusce pretium feugiat sem. Sed lorem mauris, porttitor in lectus non, aliquam cursus magna. Fusce <a href="#">bibendum rutrum</a>. Nulla nibh est, consequat vel tristique eu, ultrices eget lectus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat efficitur magna, et maximus neque eleifend sit amet. Donec accumsan nisi elit, sit amet euismod ante fringilla quis. Duis sed metus suscipit, pulvinar nunc vitae, sagittis nulla.</p>

            <h5>Lorem Ipsum Dolor Sit Amet</h5>
            <p>Donec ullamcorper lacus sed commodo tempus. Nullam efficitur suscipit erat in auctor. Nullam efficitur congue augue vel interdum. Fusce pretium feugiat sem. Sed lorem mauris, porttitor in lectus non, aliquam cursus magna. Fusce bibendum rutrum. Nulla nibh est, consequat vel tristique eu, ultrices eget lectus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat efficitur magna, et maximus neque eleifend sit amet. Donec accumsan nisi elit, sit amet euismod ante fringilla quis. Duis sed metus suscipit, pulvinar nunc vitae, sagittis nulla.</p>

            <h5>Aenean lorem dolor, luctus id hendrerit quis</h5>
            <p>Proin vulputate, lorem vel scelerisque tristique, ipsum sapien placerat lacus, id finibus urna justo quis orci. Fusce auctor leo et erat eleifend bibendum. Integer placerat, est et venenatis feugiat, sapien felis pretium augue, in consequat odio ex et odio.</p>

            <div class="wp-block-columns has-2-columns">
              <div class="wp-block-column">
                <p>Suspendisse a lacus eu magna tincidunt consequat in eu justo. Etiam quis molestie purus. In facilisis, dolor vel pretium laoreet, dolor massa tempor ipsum, quis convallis odio massa.</p>
              </div>

              <div class="wp-block-column">
                <blockquote class="wp-block-quote text-center"><p>“Nullam quam lectus, ornare at cursus sit amet, sodales posuere sapien. Integer in tempor sem”</p></blockquote>
              </div>
            </div><!-- /.wp-block-columns -->

            <p>Nunc non consectetur est. Curabitur pharetra elit quis dolor ullamcorper, quis luctus mauris pretium. Fusce auctor sem nibh, non vehicula massa scelerisque id. Fusce in sem ut nibh rutrum tempus.</p>

            <figure class="wp-block-image">
              <img src="https://via.placeholder.com/1140x532" alt="" class="wp-image-20 below-entry-meta">
              <figcaption class="below-entry-meta">Male trainer assisting young woman with pilate exercises in the fitness studio</figcaption>
            </figure>

            <h5>Aenean lorem dolor, luctus id hendrerit quis</h5>
            <p>Proin vulputate, lorem vel scelerisque tristique, ipsum sapien placerat lacus, id finibus urna justo quis orci. Fusce auctor leo et erat eleifend bibendum. Integer placerat, est et venenatis feugiat, sapien felis pretium augue, in consequat odio ex et odio.</p>
            <ul>
              <li>Proin tempus justo sit amet turpis luctus sodales.</li>
              <li>Quisque cursus nibh quam, vel fringilla diam facilisis a.</li>
              <li>Nam vitae turpis et sem sollicitudin facilisis.</li>
            </ul>
        	</div><!-- /.entry-content -->

        	<footer class="entry-footer clearfix">
            <small>Tagged:</small>

            <div class="tagcloud">
              <span class="entry-tags" itemprop="keywords">
                <a href="#" rel="tag">beginners</a>
                <a href="#" rel="tag">fitness</a>
                <a href="#" rel="tag">yoga</a>
              </span>
            </div>
          </footer><!-- /.entry-footer -->

          <!-- Blog Post Social Widget -->
          <div class="blog-post-social-widget-wrapper pos-0">
            <div class="sticky blog-post-social-widget" data-plugin-options='{"stickyBitStickyOffset": 20}'>
              <ul>
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
              </ul>
            </div><!-- /.blog-post-social-widget -->
          </div><!-- /.blog-post-social-widget-wrapper -->

        </article><!-- /.post -->

        <div id="comments" class="comments-area">
    			<h5 class="h2 comments-title">3 Comments</h5>

          <p class="comments-title-link">
      			<a href="blog-single.php#respond">
              <i class="feather-message-circle"></i>
              Add Comment
            </a>
      		</p>

          <ol class="comment-list">
            <li class="comment even thread-even depth-1 single-comment">
          		<div class="comment-block">

          			<div class="comment-author vcard">
          				<img src="assets/img/default-avatar.jpg" itemprop="image" class="avatar avatar-60 photo" height="60" width="60" alt="" />
                  <b class="url fn n">
                    <a href="http://google.com" rel="external nofollow" class="url fn n" itemprop="url">
                      <span itemprop="name">Marsha Hoffman</span>
                    </a>
                  </b>

                  <span class="says sr-only">says:</span>

                  <a href="#">
                    <time datetime="2018-12-25T10:23:58+00:00">
                      December 25, 2018 at 10:23 am
                    </time>
                  </a>
          			</div><!-- /.comment-author -->

          			<div class="comment-content">
          				<p>Nam odio ante, lacinia quis dui nec, consectetur tincidunt tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis metus lorem, commodo non dolor ut, interdum consequat nibh.</p>
          			</div>

          			<div class="comment-metadata clearfix">
          				<a itemprop="replyToUrl" rel="nofollow" class="comment-reply-link" href="#">
                    Reply &raquo;
                  </a>
          			</div><!-- /.comment-metadata -->
          		</div><!-- /.comment-block -->

              <ul class="children">
                <li class="comment odd depth-2 single-comment">
              		<div class="comment-block">

              			<div class="comment-author vcard">
              				<img src="assets/img/default-avatar.jpg" itemprop="image" class="avatar avatar-60 photo" height="60" width="60" alt="" />
                      <b class="url fn n">
                        <a href="http://google.com" rel="external nofollow" class="url fn n" itemprop="url">
                          <span itemprop="name">Sylvia Harvey</span>
                        </a>
                      </b>

                      <span class="says sr-only">says:</span>

                      <a href="#">
                        <time datetime="2018-12-25T10:23:58+00:00">
                          December 25, 2018 at 10:23 am
                        </time>
                      </a>
              			</div><!-- /.comment-author -->

              			<div class="comment-content">
              				<p>Proin vulputate, lorem vel scelerisque tristique, ipsum sapien placerat lacus, id finibus urna justo quis orci. Fusce auctor leo et erat eleifend bibendum. Integer placerat, est et venenatis feugiat</p>
              			</div>

              			<div class="comment-metadata clearfix">
              				<a itemprop="replyToUrl" rel="nofollow" class="comment-reply-link" href="#">
                        Reply &raquo;
                      </a>
              			</div><!-- /.comment-metadata -->
              		</div><!-- /.comment-block -->
                </li><!-- /.comment -->
              </ul>
            </li><!-- /.comment -->

            <li class="comment even thread-even depth-1 single-comment">
          		<div class="comment-block">

          			<div class="comment-author vcard">
          				<img src="assets/img/default-avatar.jpg" itemprop="image" class="avatar avatar-60 photo" height="60" width="60" alt="" />
                  <b class="url fn n">
                    <a href="http://google.com" rel="external nofollow" class="url fn n" itemprop="url">
                      <span itemprop="name">Marsha Hoffman</span>
                    </a>
                  </b>

                  <span class="says sr-only">says:</span>

                  <a href="#">
                    <time datetime="2018-12-25T10:23:58+00:00">
                      December 25, 2018 at 10:23 am
                    </time>
                  </a>
          			</div><!-- /.comment-author -->

          			<div class="comment-content">
          				<p>Praesent non congue metus. Fusce luctus bibendum accumsan. Phasellus nulla diam, pulvinar eget ultrices sed, tempus et augue. Pellentesque habitant morbi tristique senectus.</p>
          			</div>

          			<div class="comment-metadata clearfix">
          				<a itemprop="replyToUrl" rel="nofollow" class="comment-reply-link" href="#">
                    Reply &raquo;
                  </a>
          			</div><!-- /.comment-metadata -->
          		</div><!-- /.comment-block -->
            </li><!-- /.comment -->

      		</ol><!-- .comment-list -->
        </div><!-- /.comments-area -->

        <div id="respond" class="comment-respond">
          <h5 id="reply-title" class="h2 comment-reply-title">
            Leave a Reply
            <small>
              <a rel="nofollow" id="cancel-comment-reply-link" href="blog-single.php#respond" style="display: none;">
                <i class="feather-x-circle"></i>
                Cancel reply
              </a>
            </small>
          </h5>

          <form action="#" method="post" id="commentform" class="comment-form row">
  					<p class="comment-notes col-md-12">
              <span id="email-notes">
              Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
            </p>

            <p class="comment-form-author col-md-4">
              <label for="author">Name <span class="required">*</span></label>
              <input id="author" name="author" placeholder="Name *" type="text" value="" size="30" aria-required="true">
            </p>

            <p class="comment-form-email col-md-4">
              <label for="email">Email <span class="required">*</span></label>
              <input id="email" name="email" placeholder="Email *" type="text" value="" size="30" aria-required="true">
            </p>

            <p class="comment-form-url col-md-4">
              <label for="url">Website</label>
              <input id="url" name="url" placeholder="Website" type="text" value="" size="30">
            </p>

            <p class="comment-form-comment col-md-12">
              <label for="comment">Comment</label>
              <textarea id="comment" name="comment" placeholder="Comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
            </p>

            <p class="form-submit col-md-12">
              <input name="submit" type="submit" id="submit" class="submit btn btn-lg btn-fancy" value="Post Comment">
            </p>
          </form><!-- /.comment-form -->
        </div><!-- /.comment-respond -->

      </main><!-- /.main-content -->

      <aside class="col-lg-4 px-lg-5 sidebar widget-area clearfix" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">

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

      </aside><!-- /.sidebar -->

    </div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>

</div><!-- /.content-wrapper -->
<?php get_footer();
