<!DOCTYPE html>
<html lang="id">

<head>
    <link href="https://ayobantu.com/assets/landing/css/icofont.min.css" rel="stylesheet" />
    <link href="https://ayobantu.com/assets/landing/css/animate.css" rel="stylesheet" />
    <link href="https://ayobantu.com/assets/landing/css/bootstrap.min.css?v=0306202313" rel="stylesheet" />
    <link href="https://ayobantu.com/assets/landing/css/odometer-theme-default.css" rel="stylesheet" />
    <link href="https://ayobantu.com/assets/landing/css/style.css?v=0306202313" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,800;1,400;1,500;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.css" />
</head>

<body>
    <!-- detail -->
    <section class="blog-section section-gap-bottom" style="background: #f9f9f9;">

    <nav class="mt-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb mx-3">
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/donasi">Donasi</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $data['dns']['jenis']; ?></li>
        </ol>
    </nav>
    
        <div class="campaign-detail">
            <div class="container">
                <div class="web-version">
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <h5><strong><?= $data['dns']['jenis']; ?></strong></h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="web-version">
                        <div class="col-md-8">
                            <img src="<?= BASEURL; ?>/img/<?= $data['dns']['gambar']; ?>" alt="Foto Donasi" class="col-md-12">
                            <hr>
                            <div class="campaign-description">
                                <ul class="nav nav-pills nav-pills-rose">
                                    <li class="nav-item"><a class="nav-link active" href="#description"
                                            data-toggle="tab"><b><i class="fa fa-pencil"></i> Deskripsi</b></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#update" data-toggle="tab"><b><i
                                                    class="fa fa-bullhorn"></i> Update 0</b></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#wishes" data-toggle="tab"><b><i
                                                    class="fa fa-commenting-o"></i> Harapan #TemanPeduli</b></a></li>
                                </ul>
                                <div class="tab-content tab-space">
                                    <div class="tab-pane active" id="description">
                                        <i class="pull-right">08 March 2023</i><br>
                                        <div class="tab-pane active py-3" role="tabpanel" id="tab-description">
                                            <p><span
                                                    style="color: #212121; font-family: 'Open Sauce One', sans-serif; font-size: 14px; background-color: #ffffff;"><em>&ldquo;Barangsiapa
                                                        yang meringankan penderitaan seorang Mukmin di dunia, niscaya
                                                        Allah akan meringankan penderitaan (kesulitan)nya kelak di hari
                                                        kiamat dan barangsiapa yang memudahkan urusan orang yang
                                                        mengalami kesulitan, niscaya Allah akan memudahkan urusannya di
                                                        dunia dan akhirat&hellip;&rdquo; </em>(HR. Muslim)</span><br
                                                    style="box-sizing: inherit; color: #212121; font-family: 'Open Sauce One', sans-serif; font-size: 14px; background-color: #ffffff;" /><br
                                                    style="box-sizing: inherit; color: #212121; font-family: 'Open Sauce One', sans-serif; font-size: 14px; background-color: #ffffff;" /><span
                                                    style="color: #212121; font-family: 'Open Sauce One', sans-serif; font-size: 14px; background-color: #ffffff;"><?= $data['dns']['deskripsi']; ?></span><br
                                                    style="box-sizing: inherit; color: #212121; font-family: 'Open Sauce One', sans-serif; font-size: 14px; background-color: #ffffff;" /><br
                                                    style="box-sizing: inherit; color: #212121; font-family: 'Open Sauce One', sans-serif; font-size: 14px; background-color: #ffffff;" /><span
                                                    style="color: #212121; font-family: 'Open Sauce One', sans-serif; font-size: 14px; background-color: #ffffff;"><?= $data['dns']['deskripsi']; ?>.</span><br
                                                    style="box-sizing: inherit; color: #212121; font-family: 'Open Sauce One', sans-serif; font-size: 14px; background-color: #ffffff;" /><br
                                                    style="box-sizing: inherit; color: #212121; font-family: 'Open Sauce One', sans-serif; font-size: 14px; background-color: #ffffff;" /><strong><span
                                                        style="color: #212121; font-family: 'Open Sauce One', sans-serif; font-size: 14px; background-color: #ffffff;">Mari
                                                        ulurkan tangan bersama memberikan dukungan kepada
                                                        saudara-saudara kita <?= $data['dns']['jenis']; ?> dengan memanjatkan doa dan
                                                        memberikan bantuan terbaik melalui DonasiKita.</span></strong></p>
                                            <div class="alert alert-secondary" role="alert">
                                                <small><strong>Pernyataan</strong> : Informasi dan opini yang tertulis
                                                    di halaman penggalangan dana ini adalah milik penggalang dana dan
                                                    tidak mewakili AyoBantu. Jika ada masalah atau kecurigaan <a
                                                        href="/campaign/sedekahduniaislam/report"><b><u>Laporkan
                                                        Campaign Ini</u></b></a>
                                                </small>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <div class="single-blog campaign-detail-donation">
                                    <div class="details">
                                        <b class="label-funds-raised">Dana terkumpul</b>
                                        <h3 class="text-success funds-raised">Rp 10.000 </h3>
                                        <p class="text-left funds-target">
                                            <span style="color: #989bac;">dari target
                                                <span>&#8734; tidak terbatas</span>
                                            </span>
                                        </p>
                                        <div class="progress" data-toggle="tooltip" data-bs-tooltip
                                            title="Dana terkumpul 100 % dari target"
                                            data-original-title="Dana terkumpul 100 % dari target">
                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 100%;">&nbsp;
                                            </div>
                                        </div>
                                        <div class="info-additional">
                                            <ul>
                                                <li class="float-left" data-toggle="tooltip" data-bs-tooltip title
                                                    data-original-title="Jumlah donasi">
                                                    <strong class="font-weight-bold">1</strong><br>
                                                    <span class="text-muted">Donasi</span>
                                                </li>
                                                <li class="float-left"
                                                    style="border-left: 1px solid #eee;border-right: 1px solid #eee;"
                                                    data-toggle="tooltip" data-bs-tooltip title
                                                    data-original-title="Jumlah share">
                                                    <strong class="font-weight-bold">0</strong><br>
                                                    <span class="text-muted">Bagikan</span>
                                                </li>
                                                <li class="float-left" data-toggle="tooltip" data-bs-tooltip title
                                                    data-original-title="Penggalangan dana akan berakhir pada">
                                                    <strong class="font-weight-bold">94</strong><br>
                                                    <span class="text-muted">hari lagi</span>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php if (empty($_SESSION['donatur'])) { ?>
                                            <a class="btn btn-primary btn-block disabled" role="button" aria-disabled="true">Donasi <i class="fa fa-handshake-o" aria-hidden="true" disabled></i>
                                            </a>
                                        <?php } else { ?>
                                            <a href="<?= BASEURL; ?>/donasi/transaksi"
                                            class="btn btn-primary btn-block">Donasi <i class="fa fa-handshake-o"></i>
                                            </a>
                                        <?php } ?>
                                        <button type="button" class="btn btn-default btn-block" data-toggle="modal"
                                            data-target="#socialMediaModal">Bagikan <i class="fa fa-share"
                                                aria-hidden="true"></i>
                                        </button>
                                        <div class="fundraiser">
                                            <img src="<?= BASEURL; ?>/img/logo-poliwangi.png" alt>
                                            <a href="<?= BASEURL; ?>">
                                                <strong>
                                                    DONASIKITA
                                                </strong>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of detail -->
</body>
</html>
