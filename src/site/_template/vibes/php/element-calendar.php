<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
    'body_class' => $GLOBALS['body_class'] . '',
    'title' => 'Calendar',
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
			<div class="widget-holder col-md-12 pb-5">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="row">
              <div class="col-md-12">
                <div class="timetable">
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
                          <h6 class="title">Morning Flow</h6>
                          <small class="subtitle">Maxine lowe</small>
                        </td>

                        <td>
                          <h6 class="title">Morning Flow</h6>
                          <small class="subtitle">Maxine lowe</small>
                        </td>

                        <td>
                          <h6 class="title">Morning Flow</h6>
                          <small class="subtitle">Maxine lowe</small>
                        </td>

                        <td>&nbsp;</td>

                        <td>
                          <h6 class="title">Morning Flow</h6>
                          <small class="subtitle">Maxine lowe</small>
                        </td>

                        <td>
                          <h6 class="title">Morning Flow</h6>
                          <small class="subtitle">Maxine lowe</small>
                        </td>
                      </tr>

                      <tr>
                        <td><span class="time">12:00</span></td>
                        <td>&nbsp;</td>
                        <td>
                          <h6 class="title">Vinayasa Flow</h6>
                          <small class="subtitle">Tracy Vacura</small>
                        </td>
                        <td>
                          <h6 class="title">Hath Flow</h6>
                          <small class="subtitle">Shirley Krohn</small>
                        </td>
                        <td>
                          <h6 class="title">Hath Flow</h6>
                          <small class="subtitle">Shirley Krohn</small>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                          <h6 class="title">Hath Flow</h6>
                          <small class="subtitle">Shirley Krohn</small>
                        </td>
                      </tr>

                      <tr>
                        <td><span class="time">15:00</span></td>
                        <td>
                          <h6 class="title">Vinayasa Flow</h6>
                          <small class="subtitle">Tracy Vacura</small>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                          <h6 class="title">Vinayasa Tantra Flow</h6>
                          <small class="subtitle">Greg Hines</small>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                          <h6 class="title">Vinayasa Flow</h6>
                          <small class="subtitle">Tracy Vacura</small>
                        </td>
                        <td>&nbsp;</td>
                      </tr>

                      <tr>
                        <td><span class="time">15:00</span></td>
                        <td>&nbsp;</td>
                        <td>
                          <h6 class="title">Kundalini Yoga</h6>
                          <small class="subtitle">Chelsea Schmitz</small>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                          <h6 class="title">Kundalini Yoga</h6>
                          <small class="subtitle">Chelsea Schmitz</small>
                        </td>
                        <td>
                          <h6 class="title">Kundalini Yoga</h6>
                          <small class="subtitle">Chelsea Schmitz</small>
                        </td>
                        <td>
                          <h6 class="title">Kundalini Yoga</h6>
                          <small class="subtitle">Chelsea Schmitz</small>
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

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->

  <?php include 'partials/newsletter.php'; ?>
  
</div><!-- /.content-wrapper -->
<?php get_footer();
