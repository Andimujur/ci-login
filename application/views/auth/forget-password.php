<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class=" col-lg-6 col-sm-1">



            <div class="card o-hidden border-0 shadow-lg my-5">
                <?php if ($this->session->flashdata('flash')) : ?>
                    <?= $this->session->flashdata('flash'); ?>
                <?php endif; ?>
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                                </div>
                                <form class="user" method="POST" action="<?= base_url('auth/forgetPassword')  ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                                        <small class="text-danger"> <?= form_error('email'); ?> </small>

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration') ?>">Create an Account!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth')  ?>">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>