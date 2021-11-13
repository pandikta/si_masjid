<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Daftar Akun</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor_regis/') ?>css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor_regis/') ?>fonts/line-awesome/css/line-awesome.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor_regis/') ?>css/style.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body class="form-v7">
    <div class="page-content">
        <div class="form-v7-content">
            <div class="form-left">
                <img src="https://ik.imagekit.io/yb2mgrfzw5c/fahrul-azmi-gyKmF0vnfBs-unsplash_rizzd1TRri.jpg?updatedAt=1630210028652" alt="form">
                <p class="text-1">Sign Up</p>
                <p class="text-2">Privaci policy & Term of service</p>
            </div>
            <form class="form-detail" action="<?= base_url('admin/auth/register'); ?>" method="POST" id="myform">
                <div class="form-row">
                    <label for="nama">NAMA</label>
                    <input type="text" name="nama" id="nama" class="input-text" required autofocus>
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-row">
                    <label for="username">USERNAME</label>
                    <input type="text" name="username" id="username" class="input-text" required>
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-row">
                    <label for="password">PASSWORD</label>
                    <input type="password" name="password" id="password" class="input-text" required minlength="6">
                </div>
                <div class="form-row">
                    <label for="confirm_password">CONFIRM PASSWORD</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="input-text" required minlength="6">
                </div>
                <div class="form-row">
                    <label>DIVISI</label>
                    <select class="form-select" name="divisi" id="divisi" aria-label="Default select example" required>
                        <option selected value="">Pilih</option>
                        <option value="pengurus">Pengurus</option>
                        <option value="bendahara">Bendahara</option>
                    </select>
                </div>
                <div class="form-row-last">
                    <button class="register">Register</button>
                    <p>Or<a href="<?= base_url('administrator') ?>">Sign in</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
        // just for the demos, avoids form submit
        jQuery.validator.setDefaults({
            debug: false,
            success: function(label) {
                label.attr('id', 'valid');
            },
        });
        $("#myform").validate({
            rules: {
                password: "required",
                confirm_password: {
                    equalTo: "#password"
                }
            },
            messages: {
                username: {
                    required: "Username tidak boleh kosong"
                },
                password: {
                    required: "Password tidak boleh kosong",
                },
                confirm_password: {
                    required: "Password tidak boleh kosong",
                    equalTo: "Password tidak cocok"
                },
                nama: {
                    required: "Nama tidak boleh kosong"
                },
                divisi: {
                    required: "Divisi harus dipilih"
                }

            }
        });
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->


</html>