<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="<?= base_url('asset/login/images/img-01.png') ?>" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="<?= site_url('login/updateAct') ?>" method="POST">
                <span class="login100-form-title">
                    Reset Password Akun
                </span>
                <?= $mess ?>
                <input type="hidden" name="email" value="<?= $data ?>">
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="text-center text-danger">
                    <?php echo form_error('pass'); ?>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="repass" placeholder="Re-Enter Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="text-center text-danger">
                    <?php echo form_error('repass'); ?>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        RESET
                    </button>
                </div>

                <div class="text-center p-t-12">

                    <a class="txt2" href="<?= base_url('login/forgotPass') ?>">
                        LOGIN
                    </a>
                </div>


            </form>
        </div>
    </div>
</div>