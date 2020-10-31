<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="<?= base_url('assets/vendor_login/') ?>images/img-01.png" alt="IMG">
            </div>
            <div class="flash-masuk" data-flashmasuk="<?= $this->session->flashdata('masuk'); ?>"></div>
            <div class="flash-keluar" data-flashkeluar="<?= $this->session->flashdata('keluar'); ?>"></div>
            <div class="gagal" data-gagal="<?= $this->session->flashdata('flash'); ?>"></div>

            <form class="login100-form validate-form" method="POST" action="<?= base_url('admin/auth'); ?>">
                <span class="login100-form-title">
                    Masuk Administrator
                </span>

                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <input class="input100" type="text" name="username" placeholder="Username" value="<?= set_value('username'); ?>" autofocus>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>

                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Masuk
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        Lupa
                    </span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="#">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>