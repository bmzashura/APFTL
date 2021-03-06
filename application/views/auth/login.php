    <div class="container-fluid">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-8 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 bg-transparent">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div id="carouselExampleControls" class="col-lg-8 carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?= base_url('assets/') ?>img/slide1.png" alt="Elisaun PFN">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?= base_url('assets/') ?>img/slide2.png" alt="Database Programa">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?= base_url('assets/') ?>img/slide3.png" alt="Database Member">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="col-lg-4 rounded bg-white ">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">APFTL Login</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user" method="post" action="<?= base_url("auth"); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block mt-2">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <!---<div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>-->
                                    <div class="text-center mb-2 ">
                                        <a class="small" href="<?= base_url("auth/registration"); ?>">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <?php echo anchor(site_url('auth/guest'), 'Login as Guest', 'class="btn btn-success"'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>