<html lang="id">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="https://ayobantu.com/assets/img/favicon.ico">

    <link rel="preload" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">


    <link href="https://ayobantu.com/assets/landing/css/icofont.min.css" rel="stylesheet">
    <link href="https://ayobantu.com/assets/landing/css/animate.css" rel="stylesheet">
    <link href="https://ayobantu.com/assets/landing/css/bootstrap.min.css?v=0306202319" rel="stylesheet">
    <link href="https://ayobantu.com/assets/landing/css/odometer-theme-default.css" rel="stylesheet">
    <link href="https://ayobantu.com/assets/landing/css/style.css?v=0306202319" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,800;1,400;1,500;1,800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.css">
</head>

<body>
    <section class="blog-section section-gap-bottom" style="padding-top: 20px; background: #f9f9f9;">
        <div class="container">
            <div class="row justify-content-center">
                <input type="hidden" name="fundraiser_id" id="fundraiser_id" value="0">
                <input type="hidden" name="redirect_url" id="redirect_url" value="">
            </div>
            <h6 class="text-center mt-5" style="font-size: 12px;"><b>Zakat</b></h6>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6" id="content-donation">
                    <form action="<?= BASEURL; ?>/zakat/transaksi" method="post" class="form-horizontal box-payment-donation" role="form" id="form-donation">
                        <div class="">
                            <input type="hidden" name="id_donatur" value="<?= ($_SESSION['donatur']['id']) ?>">

                            <div class="line-title">
                                <span class="line-left-right"></span>
                                <span class="line-middle">Pilih Nominal Donasi</span>
                                <span class="line-left-right"></span>
                            </div>
                            <div class="form-group">
                                <ul class="list-group list-amount-donation">
                                    <li class="list-group-item select_amount" data-select-amount="30000"
                                        data-slug="sedekahduniaislam">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-emoji-smile text-warning"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                            </path>
                                            <path
                                                d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z">
                                            </path>
                                        </svg> &nbsp; Rp30.000 &nbsp;
                                    </li>
                                    <li class="list-group-item select_amount" data-select-amount="50000"
                                        data-slug="sedekahduniaislam">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-emoji-wink text-primary"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                            </path>
                                            <path
                                                d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm1.757-.437a.5.5 0 0 1 .68.194.934.934 0 0 0 .813.493c.339 0 .645-.19.813-.493a.5.5 0 1 1 .874.486A1.934 1.934 0 0 1 10.25 7.75c-.73 0-1.356-.412-1.687-1.007a.5.5 0 0 1 .194-.68z">
                                            </path>
                                        </svg> &nbsp; Rp50.000 &nbsp;
                                    </li>
                                    <li class="list-group-item select_amount" data-select-amount="75000"
                                        data-slug="sedekahduniaislam">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-emoji-laughing text-success"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                            </path>
                                            <path
                                                d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zM7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z">
                                            </path>
                                        </svg> &nbsp; Rp75.000 &nbsp;
                                    </li>
                                    <li class="list-group-item select_amount" data-select-amount="100000"
                                        data-slug="sedekahduniaislam">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-emoji-heart-eyes text-danger"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                            </path>
                                            <path
                                                d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z">
                                            </path>
                                        </svg> &nbsp; Rp100.000 &nbsp;
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="form-group other-amount" id="other-amount">
                                <h6>Nominal Lainnya</h6>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="amount" id="amount" class="form-control" placeholder="0"
                                        value="" aria-haspopup="true" aria-expanded="false">
                                </div>
                                <small class="text-muted" role="alert">
                                    Minimum donasi Rp 10.000
                                </small>
                                <span class="invalid-feedback" role="alert" style="display: none" id="error-amount">
                                    <strong>Masukkan nominal donasi</strong>
                                </span>
                                <span class="invalid-feedback" role="alert" style="display: none"
                                    id="error-other-amount">
                                    <strong>Ketik Nominal</strong>
                                </span>
                            </div>
                            <div class="form-group" id="error-min-donation" style="display: none;">
                                <span class="invalid-feedback" role="alert" style="display: block;">
                                    <strong>Minimum donasi Rp 10.000</strong>
                                </span>
                            </div>
                            <button class="btn btn-primary btn-block next-btn" type="submit"
                                data-slug="sedekahduniaislam">Donasikan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>