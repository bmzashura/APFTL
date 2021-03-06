  <div class="container">

      <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                  <div class="col-lg-12">
                      <div class="p-5">
                          <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                          </div>
                          <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                              <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input type="text" class="form-control form-control-user" id="name1" name="name1" placeholder="First Name" value="<?= set_value('name1'); ?>">
                                      <?= form_error('name1', '<small class="text-danger pl-3">', '</small>'); ?>
                                  </div>
                                  <div class="col-sm-6">
                                      <input type="text" class="form-control form-control-user" id="name2" name="name2" placeholder="Last Name" value="<?= set_value('name2'); ?>">
                                      <?= form_error('name2', '<small class="text-danger pl-3">', '</small>'); ?>
                                  </div>
                              </div>
                              <div class="form-group row">
                              <div class="col-sm-6">
                                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                      <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                  </div>
                                  <div class="col-sm-6">
                                      <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                  </div>
                              </div>
                              <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
                              <button type="submit" class="btn btn-primary btn-user btn-block mt-3">
                                  Register Account
                              </button>
                          </form>
                          <hr>
                          <div class="text-center">
                              <a class="small" href="<?= base_url("auth/"); ?>">Already have an account? Login!</a>
                          </div>
                      </div>
              </div>
          </div>
      </div>

  </div>