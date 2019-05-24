<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
    'body_class' => $GLOBALS['body_class'] . '',
    'title' => 'Typography',
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

			<!-- Typography -->
			<div id="typography-page-widget" class="widget-holder col-md-8 offset-md-2 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <h1>Heading 1</h1>
            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>

            <hr class="mr-tb-70">

            <h2>Heading 2</h2>
            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>

            <hr class="mr-tb-70">

            <h3>Heading 3</h3>
            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>

            <ul>
              <li>First</li>
              <li>Second</li>
              <li>Third</li>
            </ul>

            <hr class="mr-tb-70">

            <h4>Heading 4</h4>
            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>

            <ol>
              <li>First</li>
              <li>Second</li>
              <li>Third</li>
            </ol>

            <hr class="mr-tb-70">

            <h5>Blockquote</h5>
            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>

            <blockquote class="blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard.</p>
              <cite title="Marsha Hoffman">
                Marsha Hoffman
              </cite>
            </blockquote>

					</div><!-- /.widget-body -->
				</div><!-- /.widget-bg -->
			</div><!-- /.widget-holder -->

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>

</div><!-- /.content-wrapper -->
<?php get_footer();
