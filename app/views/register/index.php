<html lang="id">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="https://ayobantu.com/assets/img/favicon.ico">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://ayobantu.com/assets/landing/css/icofont.min.css" rel="stylesheet">
    <link href="https://ayobantu.com/assets/landing/css/animate.css" rel="stylesheet">
    <link href="https://ayobantu.com/assets/landing/css/bootstrap.min.css?v=0406202310" rel="stylesheet">
    <link href="https://ayobantu.com/assets/landing/css/odometer-theme-default.css" rel="stylesheet">
    <link href="https://ayobantu.com/assets/landing/css/style.css?v=0406202310" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,800;1,400;1,500;1,800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.css">
</head>

<body>
    <div class="content-wrapper align-items-center justify-content-center section-gap-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="text-center">
                        <img src="https://ayobantu.com/assets/img/auth-donate.webp" alt="LoginImage" class="img-fluid" loading="lazy" style="width: 70%;">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Registrasi</h3>
                                <div class="text-center">
                                </div>
                            </div>
                            <form action="register/register" method="post" class="login-form">
                                <input type="hidden" name="_token" value="jj1iTx4oWrw19v9kPMn1GEPsleRMCqwMlzNGunKa">
                                <input type="hidden" name="url" value="">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control  my_autofocus" name="nama" value="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Handphone</label>
                                    <input type="phone" class="form-control  my_autofocus" name="nohp" value="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input id="text" type="text" class="form-control " name="email" value="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control " name="password" placeholder="">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" class="" name="terms"> Saya telah menyetujui <a href="#" target="_blank">Syarat &amp; Ketentuan</a>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block" id="btn-submit-auth">Daftar</button>
                                </div>
                                <div class="form-group text-center">
                                    Sudah punya akun? <a href="<?= BASEURL; ?>/login" class="text-small text-center register text-black"><u>Masuk Disini</u></a>
                                </div>
                            </form>
                            <div class="" style="display: flex;
                            -webkit-box-align: center;
                            align-items: center;
                            margin: 10px 0px;">
                                <span class="css-1q1vbl7" style="display: inline-block;
                            border: 0.5px solid rgba(0, 0, 0, 0.12);
                            width: 50%;"></span>
                                <span class="css-1t3w0g7" style="font-size: 0.857143rem;
                            text-align: center;
                            color: rgba(0, 0, 0, 0.38);
                            padding: 0px 18px;
                            white-space: nowrap;">atau masuk dengan</span>
                                <span class="css-1q1vbl7" style="display: inline-block;
                            border: 0.5px solid rgba(0, 0, 0, 0.12);
                            width: 50%;"></span>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 my-10">
                                        <a href="#" class="btn btn-primary submit-btn btn-block">
                                            <i class="fa fa-facebook" aria-hidden="true"></i> Facebook
                                        </a>
                                    </div>
                                    <div class="col-md-6 my-10">
                                        <a href="#" class="btn btn-default submit-btn btn-block">
                                            <img src="https://ayobantu.com/assets/img/icon/google.jpeg" style="width: 1.2em; height: 1.2em;"> Google
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="footer-text text-center">2023 DonasiKita, Inc. All rights reserved.</p>
    </div>
</body>
</html>