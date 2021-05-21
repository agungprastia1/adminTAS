<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="<?= base_url('asset/login/images/img-01.png') ?>" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="POST" action="<?= site_url('login/forgotAct') ?>">
                <span class="login100-form-title">
                    Resset Password
                </span>
                <?= $data ?>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        RESSET
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>