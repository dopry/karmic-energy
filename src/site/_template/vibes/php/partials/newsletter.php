<div id="newsletter-modal" class="modal animated fadeInDown" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <div class="row">
          <div class="col-sm-7" id="newsletter-modal__content-col">
            <p>For your convenience</p>
            <p id="newsletter-modal__subtitle">Try us out - cancel any time</p>
            <form class="form mb-5">
              <div class="form-group">
                <input type="email" name="newsletter_email" id="newsletter_email" placeholder="Enter your email address ..." class="form-control" />
              </div><!-- /.form-group -->
              <div class="form-group">
                <button type="submit" class="btn btn-fancy">Start Free Trial<i class="ml-3 feather-arrow-right"></i></button>
              </div><!-- /.form-group -->
            </form> 
            <form class="w-100">
              <div class="custom-control custom-checkbox custom-control-circle">
                <input type="checkbox" class="custom-control-input" name="disable_newsletter_forever" id="disable_newsletter_forever">
                <label class="custom-control-label" for="disable_newsletter_forever">Do not show popup any more</label>
              </div>
            </form>
          </div><!-- /.col-sm-7 -->

          <div class="col-sm-5 d-flex flex-column justify-content-end text-center text-white text-uppercase" id="newsletter-modal__side-col">
            <small class="fw-600 mb-3">Yoga classes for all</small>
            <h2 id="newsletter-modal__side-col-title">Own your practice</h2>
          </div><!-- /.col-sm-5 -->
        </div><!-- /.row -->
      </div><!-- /.modal-body -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->