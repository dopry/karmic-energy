<?php

$prefix = '';
if( $GLOBALS['enable_relative_nav'] )
  $prefix = $prefix . '../default/';

?>
<!-- SIDEBAR -->
<aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">

	<!-- User Details -->
	<div class="side-user d-none">
		<div class="col-sm-12 text-center p-0 clearfix">
			<div class="d-inline-block pos-relative mr-b-10">
				<figure class="thumb-sm mr-b-0 user--online">
					<img  src="assets/demo/users/user1.jpg" class="rounded-circle" alt="" />
				</figure>

				<a href="page-profile.php" class="text-muted side-user-link">
					<i class="feather feather-settings list-icon"></i>
				</a>
			</div><!-- /.d-inline-block -->

			<div class="lh-14 mr-t-5">
				<a href="page-profile.php" class="hide-menu mt-3 mb-0 side-user-heading fw-500">Scott Adams</a>
				<br /><small class="hide-menu">Developer</small>
			</div>

		</div><!-- /.col-sm-12 -->
	</div><!-- /.side-user -->

  <!-- Call to Action -->
  <div class="side-content mr-t-30 mr-lr-15">
    <a class="btn btn-block btn-success ripple fw-600" href="#">
      <i class="fa fa-plus-square-o mr-1 mr-0-rtl ml-1-rtl"></i>
      New Project
    </a>
  </div>

	<!-- Sidebar Menu -->
	<nav class="sidebar-nav">
		<ul class="nav in side-menu">

			<li class="current-page menu-item-has-children">
				<a href="index.php"  >
					<i class="list-icon feather feather-command"></i>
					<span class="hide-menu">
						Dashboard
					</span>
				</a>

        <?php if( $GLOBALS['enable_relative_nav'] ) : ?>
				<ul class="list-unstyled sub-menu">
          <li><a href="../default/index.php">Default</a></li>
					<li><a href="../collapsed-light/index.php">Collapsed Light</a></li>
					<li><a href="../dark/index.php">Dark</a></li>
					<li><a href="../horizontal-nav-icons/index.php">Horizontal Nav</a></li>
					<li><a href="../rtl/index.php">RTL Demo</a></li>
				</ul>
        <?php else : ?>
				<ul class="list-unstyled sub-menu">
          <li><a href="index.php">Default</a></li>
					<li><a href="index-collapsed-light.php">Collapse Light</a></li>
					<li><a href="index-dark.php">Dark</a></li>
					<li><a href="index-horizontal-nav-icons.php">Horizontal Nav</a></li>
					<li><a href="index-rtl.php">RTL Demo</a></li>
				</ul>
        <?php endif; ?>
			</li>

			<li class="menu-item-has-children active">
				<a href="javascript:void(0);">
					<i class="list-icon feather feather-briefcase"></i>
					<span class="hide-menu">
						Apps
            <span class="badge bg-primary">6</span>
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
          <li><a href="<?php echo $prefix; ?>app-calender.php">Calender</a></li>
					<li><a href="<?php echo $prefix; ?>app-chat.php">Chat</a></li>
          <li><a href="<?php echo $prefix; ?>app-inbox.php">Inbox</a></li>
          <li><a href="<?php echo $prefix; ?>app-contacts.php">Contacts</a></li>
					<li><a href="<?php echo $prefix; ?>app-products.php">Products</a></li>
					<li><a href="<?php echo $prefix; ?>app-blog.php">Blog</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);">
					<i class="list-icon feather feather-user"></i>
					<span class="hide-menu">
						Profile Pages
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
          <li><a href="<?php echo $prefix; ?>page-profile.php">Profile</a></li>
					<li><a href="<?php echo $prefix; ?>page-login.php">Login Page</a></li>
					<li><a href="<?php echo $prefix; ?>page-login2.php">Login Page 2</a></li>
					<li><a href="<?php echo $prefix; ?>page-register.php">Sign Up</a></li>
					<li><a href="<?php echo $prefix; ?>page-register2.php">Sign Up 2</a></li>
					<li><a href="<?php echo $prefix; ?>page-register-3-step.php">3 Step Sign Up</a></li>
					<li><a href="<?php echo $prefix; ?>page-forgot-pwd.php">Forgot Password</a></li>
					<li><a href="<?php echo $prefix; ?>page-email-confirm.php">Confirm Email</a></li>
					<li><a href="<?php echo $prefix; ?>page-lock-screen.php">Lock Screen</a></li>
					<li><a href="<?php echo $prefix; ?>page-timeline.php">Timeline</a></li>
					<li class="menu-item-has-children">
						<a href="javascript:void(0);">
							Error Pages
						</a>
						<ul class="list-unstyled sub-menu">
              <li><a href="<?php echo $prefix; ?>page-error-403.php">Error 403</a></li>
							<li><a href="<?php echo $prefix; ?>page-error-404.php">Error 404</a></li>
							<li><a href="<?php echo $prefix; ?>page-error-500.php">Error 500</a></li>
							<li><a href="<?php echo $prefix; ?>page-error-503.php">Error 503</a></li>
						</ul>
					</li>
				</ul>
			</li>

      <li class="menu-item-has-children">
				<a href="javascript:void(0);">
					<i class="list-icon feather feather-folder"></i>
					<span class="hide-menu">
						Sample Pages
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="page-blank.php">Blank Page</a></li>
					<li class="menu-item-has-children">
						<a href="javascript:void(0);">Email Templates</a>
						<ul class="list-unstyled sub-menu">
              <li><a href="<?php echo $prefix; ?>email-templates/basic.html">Basic</a></li>
							<li><a href="<?php echo $prefix; ?>email-templates/billing.html">Billing</a></li>
							<li><a href="<?php echo $prefix; ?>email-templates/friend-request.html">Friend Request</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children">
						<a href="javascript:void(0);">Maps</a>
						<ul class="list-unstyled sub-menu">
              <li><a href="<?php echo $prefix; ?>maps-google.php">Google Maps</a></li>
							<li><a href="<?php echo $prefix; ?>maps-vector.php">Vector Maps</a></li>
						</ul>
					</li>

          <li><a href="<?php echo $prefix; ?>page-lightbox.php">Lightbox Popup</a></li>
					<li><a href="<?php echo $prefix; ?>page-sitemap.php">Sitemap</a></li>
					<li><a href="<?php echo $prefix; ?>page-search-results.php">Search Results</a></li>
					<li><a href="<?php echo $prefix; ?>page-custom-scroll.php">Custom Scroll</a></li>
					<li><a href="<?php echo $prefix; ?>page-utility-classes.php">Utility Classes</a></li>
					<li><a href="<?php echo $prefix; ?>page-animations.php">Animations</a></li>
					<li><a href="<?php echo $prefix; ?>page-faq.php">FAQ</a></li>
					<li><a href="<?php echo $prefix; ?>page-pricing-table.php">Pricing</a></li>
					<li><a href="<?php echo $prefix; ?>page-invoice.php">Invoice</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);">
					<i class="list-icon feather feather-feather"></i>
					<span class="hide-menu">
						UI Elements
            <span class="badge bg-info">7</span>
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
          <li><a href="<?php echo $prefix; ?>ui-typography.php">Typography</a></li>
					<li><a href="<?php echo $prefix; ?>ui-buttons.php">Buttons</a></li>
					<li><a href="<?php echo $prefix; ?>ui-cards.php">Cards</a></li>
					<li><a href="<?php echo $prefix; ?>ui-tabs.php">Tabs</a></li>
					<li><a href="<?php echo $prefix; ?>ui-accordions.php">Accordions</a></li>
					<li><a href="<?php echo $prefix; ?>ui-modals.php">Modals</a></li>
					<li><a href="<?php echo $prefix; ?>ui-icon-boxes.php">Icon Boxes</a></li>
					<li><a href="<?php echo $prefix; ?>ui-lists.php">Lists &amp; Media Object</a></li>
					<li><a href="<?php echo $prefix; ?>ui-grid.php">Grid</a></li>
					<li><a href="<?php echo $prefix; ?>ui-progress.php">Progress Bars</a></li>
					<li><a href="<?php echo $prefix; ?>ui-notifications.php">Notifications &amp; Alerts</a></li>
					<li><a href="<?php echo $prefix; ?>ui-pagination.php">Pagination</a></li>
					<li><a href="<?php echo $prefix; ?>ui-media.php">Media</a></li>
					<li><a href="<?php echo $prefix; ?>ui-carousel.php">Carousel</a></li>
					<li><a href="<?php echo $prefix; ?>ui-bootstrap.php">Bootstrap Elements</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);">
					<i class="list-icon feather feather-layout"></i>
					<span class="hide-menu">
						Forms
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
          <li><a href="<?php echo $prefix; ?>form-elements.php">Elements</a></li>
					<li><a href="<?php echo $prefix; ?>form-material.php">Material Design</a></li>
					<li><a href="<?php echo $prefix; ?>form-validation.php">Form Validation</a></li>
					<li><a href="<?php echo $prefix; ?>form-dropzone.php">File Upload</a></li>
					<li><a href="<?php echo $prefix; ?>form-pickers.php">Picker</a></li>
					<li><a href="<?php echo $prefix; ?>form-select.php">Select and Multiselect</a></li>
					<li><a href="<?php echo $prefix; ?>form-tags-categories.php">Tags and Categories</a></li>
					<li><a href="<?php echo $prefix; ?>form-addons.php">Addons</a></li>
					<li><a href="<?php echo $prefix; ?>form-editors.php">Editors</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);">
					<i class="list-icon feather feather-clipboard"></i>
					<span class="hide-menu">
						Tables
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
          <li><a href="<?php echo $prefix; ?>tables-basic.php">Basic Tables</a></li>
					<li><a href="<?php echo $prefix; ?>tables-data-table.php">Data Table</a></li>
					<li><a href="<?php echo $prefix; ?>tables-bootstrap.php">Bootstrap Tables</a></li>
					<li><a href="<?php echo $prefix; ?>tables-responsive.php">Responsive Tables</a></li>
					<li><a href="<?php echo $prefix; ?>tables-editable.php">Editable Tables</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);">
					<i class="list-icon feather feather-pie-chart"></i>
					<span class="hide-menu">
						Charts
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
          <li><a href="<?php echo $prefix; ?>charts-flot.php">Flot Charts</a></li>
					<li><a href="<?php echo $prefix; ?>charts-morris.php">Morris Charts</a></li>
					<li><a href="<?php echo $prefix; ?>charts-js.php">Chart-js</a></li>
					<li><a href="<?php echo $prefix; ?>charts-sparkline.php">Sparkline Charts</a></li>
					<li><a href="<?php echo $prefix; ?>charts-knob.php">Knob Charts</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);">
					<i class="list-icon feather feather-heart"></i>
					<span class="hide-menu">
						Icons
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
          <li><a href="<?php echo $prefix; ?>icons-material-design.php">Material Design</a></li>
					<li><a href="<?php echo $prefix; ?>icons-font-awesome.php">Font Awesome</a></li>
					<li><a href="<?php echo $prefix; ?>icons-mono-social.php">Social Icons</a></li>
					<li><a href="<?php echo $prefix; ?>icons-weather.php">Weather Icons</a></li>
					<li><a href="<?php echo $prefix; ?>icons-linea.php">Linea Icons</a></li>
					<li><a href="<?php echo $prefix; ?>icons-feather.php">Feather Icons</a></li>
				</ul>
			</li>

		</ul><!-- /.side-menu -->
	</nav><!-- /.sidebar-nav -->

</aside><!-- /.site-sidebar -->
