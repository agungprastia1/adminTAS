<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="<?= base_url('asset/login/images/img-01.png') ?>" alt="IMG">
            </div>

            <form action="<?= base_url('daftar/addact') ?>" class="login100-form validate-form" method="POST">
                <span class="login100-form-title">
                    Daftar Akun Admin
                </span>
                <div class="text-center"><?= $data ?></div>
                <div class="wrap-input100 validate-input" data-validate="Valid Username is required">
                    <input class="input100" type="text" name="user" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="text-center text-danger">
                    <?php echo form_error('user'); ?>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="text-center text-danger">
                    <?php echo form_error('email'); ?>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid NO HP is required: 08..">
                    <input class="input100" type="text" name="nohp" placeholder="No Telpon">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="text-center text-danger">
                    <?php echo form_error('nohp'); ?>
                </div>

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
                    <button class="login100-form-btn" type="submit">
                        Daftar
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>