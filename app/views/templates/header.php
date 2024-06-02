<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
    
<header data-bs-theme="light">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold ms-2" href="<?= BASEURL; ?>">
                <img src="<?= BASEURL; ?>/img/logo-poliwangi.png" alt="Logo" width="36" height="30" class="d-inline-block align-text-top">
                DonasiKita
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse fw-bold" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item mx-2">
                    <a class="nav-link <?= BASEURL . '/' === CURRENT_URL ? 'active' : '' ?>" 
                    href="<?= BASEURL; ?>">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link <?= BASEURL . '/donasi' === CURRENT_URL ? 'active' : '' ?>" 
                    href="<?= BASEURL; ?>/donasi">Donasi</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link <?= BASEURL . '/sosial' === CURRENT_URL ? 'active' : '' ?>" 
                    href="<?= BASEURL; ?>/sosial">Sosial</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link <?= BASEURL . '/zakat' === CURRENT_URL ? 'active' : '' ?>" 
                    href="<?= BASEURL; ?>/zakat">Zakat</a>
                </li>
                </ul>
                <?php if (empty($_SESSION['donatur'])) { ?>
                    <div class="me-3">
                        <button type="button" class="btn btn-warning rounded-pill fw-bold">
                            <a href="<?= BASEURL; ?>/login" class="link-light text-decoration-none">Login</a>
                        </button>
                    </div>
                <?php } else { ?>
                    <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                        <li class="nav-item dropdown dropstart">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-user mx-1"></i>
                                <?= $_SESSION['donatur']['nama']; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">History donasi</a></li>
                                <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="<?= BASEURL; ?>/login/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </nav>
</header>