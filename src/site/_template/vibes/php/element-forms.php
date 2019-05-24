<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';
$config = array(
    'body_class' => $GLOBALS['body_class'] . '',
    'title' => 'Forms',
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

			<!-- Form Default -->
			<div id="forms-page__default-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="col-md-9 mx-auto">
              <h2 class="fancy-heading mr-b-50 text-center">
                <span>Form Default</span>
              </h2>

              <form method="get" action="javascript:void(0)">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="form-1-name">Name</label>
                      <input type="text" name="form-1-name" id="form-1-name" class="form-control" />
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="form-1-email">Email</label>
                      <input type="email" name="form-1-email" id="form-1-email" class="form-control" />
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->


                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="form-1-phone">Phone</label>
                      <input type="tel" name="form-1-phone" id="form-1-phone" class="form-control" />
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->
                </div><!-- /.row -->

                <div class="form-group">
                  <label for="form-1-message">Message</label>
                  <textarea name="form-1-message" id="form-1-message" class="form-control" rows="4"></textarea>
                </div><!-- /.form-group -->

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="form-1-phone">Disabled</label>
                      <input type="text" name="form-1-disabled" id="form-1-disabled" value="Disabled" class="form-control" disabled="" />
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="form-1-phone">ReadOnly</label>
                      <input type="text" name="form-1-readonly" id="form-1-readonly" value="Read Only" class="form-control" readonly="" />
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="form-1-phone">Seats</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option disabled selected>Select no. of seats</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->
                </div><!-- /.row -->

                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      I agree to <a href="">terms and condition</a>
                    </label>
                  </div><!-- /.form-check -->
                </div><!-- /.form-group -->

                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Option 1
                    </label>
                  </div><!-- /.form-check -->

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                    <label class="form-check-label" for="exampleRadios2">
                      Option 2
                    </label>
                  </div><!-- /.form-check -->
                </div><!-- /.form-group -->

                <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div><!-- /.form-group -->
              </form>
            </div><!-- /.col-md-8 -->

					</div><!-- /.widget-body -->
				</div><!-- /.widget-bg -->
			</div><!-- /.widget-holder -->

      <!-- Form Icon Label -->
      <div id="forms-page__icon-label-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="col-md-9 mx-auto">
              <h2 class="fancy-heading mr-b-50 text-center">
                <span>Form Icon Label</span>
              </h2>

              <form class="form-icon-label" method="get" action="javascript:void(0)">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" name="form-2-name" id="form-2-name" class="form-control" />
                      <label for="form-2-name">Name</label>
                      <i class="form-icon feather-user"></i>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="email" name="form-2-email" id="form-2-email" class="form-control" />
                      <label for="form-2-email">Email</label>
                      <i class="form-icon feather-mail"></i>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->


                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="tel" name="form-2-phone" id="form-2-phone" class="form-control" />
                      <label for="form-2-phone">Phone</label>
                      <i class="form-icon feather-phone"></i>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->
                </div><!-- /.row -->

                <div class="form-group">
                  <textarea name="form-2-message" id="form-2-message" class="form-control" rows="4"></textarea>
                  <label for="form-2-message">Message</label>
                  <i class="form-icon feather-message-square"></i>
                </div><!-- /.form-group -->

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" name="form-2-disabled" id="form-2-disabled" value="Disabled" class="form-control" disabled="" />
                      <i class="form-icon feather-user"></i>
                      <label for="form-2-phone">Disabled</label>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" name="form-2-readonly" id="form-2-readonly" value="Read Only" class="form-control" readonly="" />
                      <i class="form-icon feather-mail"></i>
                      <label for="form-2-phone">ReadOnly</label>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <select class="form-control" id="exampleFormControlSelect2">
                        <option disabled selected>Select no. of seats</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->
                </div><!-- /.row -->

                <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div><!-- /.form-group -->
              </form>
            </div><!-- /.col-md-9 -->



          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

      <!-- Form Material -->
      <div id="forms-page__material-widget" class="widget-holder col-md-12 p-0">
        <div class="widget-bg">
          <div class="widget-body container">

            <div class="col-md-9 mx-auto">
              <h2 class="fancy-heading mr-b-50 text-center">
                <span>Form Material</span>
              </h2>

              <form class="form-material" method="get" action="javascript:void(0)">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" name="form-3-name" id="form-3-name" class="form-control" placeholder="Name" />
                      <label for="form-3-name">Name</label>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="email" name="form-3-email" id="form-3-email" class="form-control" placeholder="Email" />
                      <label for="form-3-email">Email</label>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->


                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="tel" name="form-3-phone" id="form-3-phone" class="form-control" placeholder="Phone" />
                      <label for="form-3-phone">Phone</label>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->
                </div><!-- /.row -->

                <div class="form-group">
                  <textarea name="form-3-message" id="form-3-message" class="form-control" rows="4" placeholder="Message"></textarea>
                  <label for="form-3-phone">Message</label>
                </div><!-- /.form-group -->

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" name="form-3-disabled" id="form-3-disabled" value="Disabled" class="form-control" disabled="" />
                      <label for="form-3-phone">Disabled</label>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" name="form-3-readonly" id="form-3-readonly" value="Read Only" class="form-control" readonly="" />
                      <label for="form-3-phone">ReadOnly</label>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <select class="form-control" id="exampleFormControlSelect3">
                        <option disabled selected>Select no. of seats</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                      <label for="form-3-phone">Seats</label>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-md-4 -->
                </div><!-- /.row -->

                <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div><!-- /.form-group -->
              </form>
            </div><!-- /.col-md-9 -->

          </div><!-- /.widget-body -->
        </div><!-- /.widget-bg -->
      </div><!-- /.widget-holder -->

		</div><!-- /.widget-list -->
  </div><!-- /.main-wrappper -->
  
  <?php include 'partials/newsletter.php'; ?>

</div><!-- /.content-wrapper -->
<?php get_footer();
