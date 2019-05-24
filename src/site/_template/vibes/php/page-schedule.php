<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
    'body_class' => $GLOBALS['body_class'] . '',
    'title' => array(
      'Schedule',
      'text-white text-left',
      'background-image: url(\'https://via.placeholder.com/1920x500/000000/\');',
    ),
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

			<!-- Calendar -->
			<div class="widget-holder col-md-12 pb-5 schedule">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row" id="schedule__selector">
              <div class="col-md-3">
                <form action="javascript:void()" method="get">
                  <div class="form-group">
                    <select class="form-control schedule-selector" name="schedule-selector" data-target="#timetable">
                      <option value="all" selected="">All Classes</option>
                      <option value="morning-flow">Morning Flow</option>
                      <option value="vinayasa-flow">Vinayasa Flow</option>
                      <option value="hath-flow">Hath Flow</option>
                      <option value="vinayasa-tantra-flow">Vinayasa Tantra Flow</option>
                      <option value="kundalini-yoga">Kundalini Yoga</option>
                    </select>
                  </div><!-- /.form-group -->
                </form>
              </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

            <div class="row" id="schedule__timetable">
              <div class="col-md-12">

                <div id="timetable" class="timetable">
                  <table class="table table-bordered table-responsive text-center">
                    <thead>
                      <tr>
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span class="time">09:00</span></td>
                        <td>
                          <div data-schedule-category="morning-flow">
                            <h6 class="title">Morning Flow</h6>
                            <small class="subtitle">Maxine lowe</small>
                          </div>
                        </td>

                        <td>
                          <div data-schedule-category="morning-flow">
                            <h6 class="title">Morning Flow</h6>
                            <small class="subtitle">Maxine lowe</small>
                          </div>
                        </td>

                        <td>
                          <div data-schedule-category="morning-flow">
                            <h6 class="title">Morning Flow</h6>
                            <small class="subtitle">Maxine lowe</small>
                          </div>
                        </td>

                        <td>&nbsp;</td>

                        <td>
                          <div data-schedule-category="morning-flow">
                            <h6 class="title">Morning Flow</h6>
                            <small class="subtitle">Maxine lowe</small>
                          </div>
                        </td>

                        <td>
                          <div data-schedule-category="morning-flow">
                            <h6 class="title">Morning Flow</h6>
                            <small class="subtitle">Maxine lowe</small>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td><span class="time">12:00</span></td>
                        <td>&nbsp;</td>
                        <td>
                          <div data-schedule-category="vinayasa-flow">
                            <h6 class="title">Vinayasa Flow</h6>
                            <small class="subtitle">Tracy Vacura</small>
                          </div>
                        </td>
                        <td>
                          <div data-schedule-category="hath-flow">
                            <h6 class="title">Hath Flow</h6>
                            <small class="subtitle">Shirley Krohn</small>
                          </div>
                        </td>
                        <td>
                          <div data-schedule-category="hath-flow">
                            <h6 class="title">Hath Flow</h6>
                            <small class="subtitle">Shirley Krohn</small>
                          </div>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                          <div data-schedule-category="hath-flow">
                            <h6 class="title">Hath Flow</h6>
                            <small class="subtitle">Shirley Krohn</small>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td><span class="time">15:00</span></td>
                        <td>
                          <div data-schedule-category="vinayasa-flow">
                            <h6 class="title">Vinayasa Flow</h6>
                            <small class="subtitle">Tracy Vacura</small>
                          </div>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                          <div data-schedule-category="vinayasa-tantra-flow">
                            <h6 class="title">Vinayasa Tantra Flow</h6>
                            <small class="subtitle">Greg Hines</small>
                          </div>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                          <div data-schedule-category="vinayasa-flow">
                            <h6 class="title">Vinayasa Flow</h6>
                            <small class="subtitle">Tracy Vacura</small>
                          </div>
                        </td>
                        <td>&nbsp;</td>
                      </tr>

                      <tr>
                        <td><span class="time">15:00</span></td>
                        <td>&nbsp;</td>
                        <td>
                          <div data-schedule-category="kundalini-yoga">
                            <h6 class="title">Kundalini Yoga</h6>
                            <small class="subtitle">Chelsea Schmitz</small>
                          </div>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                          <div data-schedule-category="kundalini-yoga">
                            <h6 class="title">Kundalini Yoga</h6>
                            <small class="subtitle">Chelsea Schmitz</small>
                          </div>
                        </td>
                        <td>
                          <div data-schedule-category="kundalini-yoga">
                            <h6 class="title">Kundalini Yoga</h6>
                            <small class="subtitle">Chelsea Schmitz</small>
                          </div>
                        </td>
                        <td>
                          <div data-schedule-category="kundalini-yoga">
                            <h6 class="title">Kundalini Yoga</h6>
                            <small class="subtitle">Chelsea Schmitz</small>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.timetable -->

              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

					</div><!-- /.widget-body -->
				</div><!-- /.widget-bg -->
			</div><!-- /.widget-holder -->

      <!-- Pricing Box -->
      <div id="schedule__pricing-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-12">
                <h4 class="font-family-base text-center fw-500 mb-5 fs-60">pricing</h4>
              </div><!-- /.col-12 -->

              <div class="col-lg-4">
                <div class="pricing-box pricing-box-minimal">
                  <header>
                    <span>Weekend Pass</span>
                    <h4 class="fancy-heading">
                      <span>
                        <span class="pricing-currency">&dollar;</span>85
                      </span>
                    </h4>
                    <small>/mo</small>
                  </header>

                  <div class="pricing-box-content">
                    <ul class="list-unstyled">
                      <li>Unlimited Classes (Sat & Sun)</li>
                      <li>Free Mat and Towel Rentals</li>
                      <li>15% off Workshops</li>
                    </ul><!-- /.list-unstyled -->

                    <a href="javascript:void(0)" class="btn btn-rounded btn-tertiary text-uppercase">
                      Join Now
                    </a>
                  </div><!-- /.pricing-box-content -->
                </div><!-- /.pricing-box -->
              </div><!-- /.col-lg-4 -->

              <div class="col-lg-4">
                <div class="pricing-box pricing-box-minimal pricing-box-active">
                  <header>
                    <span>Monthly Pass</span>
                    <h4 class="fancy-heading">
                      <span>
                        <span class="pricing-currency">&dollar;</span>145
                      </span>
                    </h4>
                    <small>/mo</small>
                  </header>

                  <div class="pricing-box-content">
                    <ul class="list-unstyled">
                      <li>Unlimited Classes</li>
                      <li>Free Mat and Towel Rentals</li>
                      <li>15% off Workshops</li>
                    </ul><!-- /.list-unstyled -->

                    <a href="javascript:void(0)" class="btn btn-rounded btn-primary text-uppercase">
                      Join Now
                    </a>
                  </div><!-- /.pricing-box-content -->
                </div><!-- /.pricing-box -->
              </div><!-- /.col-lg-4 -->

              <div class="col-lg-4">
                <div class="pricing-box pricing-box-minimal">
                  <header>
                    <span>Annual Pass</span>
                    <h4 class="fancy-heading">
                      <span>
                        <span class="pricing-currency">&dollar;</span>85
                      </span>
                    </h4>
                    <small>/mo</small>
                  </header>

                  <div class="pricing-box-content">
                    <ul class="list-unstyled">
                      <li>Unlimited Classes</li>
                      <li>Free Mat and Towel Rentals</li>
                      <li>15% off Workshops</li>
                    </ul><!-- /.list-unstyled -->

                    <a href="javascript:void(0)" class="btn btn-rounded btn-tertiary text-uppercase">
                      Join Now
                    </a>
                  </div><!-- /.pricing-box-content -->
                </div><!-- /.pricing-box -->

              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Call to Action -->
      <div class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container-fluid">

              <div class="row no-gutters">
                <div class="col">
                  <a href="#" class="btn btn-block btn-cta">Get started for just $29 per month</a>
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
