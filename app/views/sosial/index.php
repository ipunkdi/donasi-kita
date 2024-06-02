<!-- jumbotrons -->
<div class="mt-5 mb-4">
    <div class="p-3 text-center">
        <div class="container py-3">
            <h1 class="text-body-emphasis">Sosial</h1>
            <p class="col-lg-8 mx-auto lead">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt obcaecati pariatur in quidem saepe soluta aperiam nisi culpa eum repellendus!
            </p>
        </div>
    </div>
</div>
<!-- end of jumbotrons -->

<!-- album -->
<div class="album pb-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach($data['sos'] as $sos) : ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-body">
                                <li class="list-group-item d-inline justify-content-between align-items-center">
                                <img src="<?= BASEURL; ?>/img/<?= $sos['gambar']; ?>" alt="album" class="img-fluid" width="100%" height="225">
                                    <h4><?= $sos['jenis']; ?></h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group col mx-auto mt-2">
                                            <a href="<?= BASEURL; ?>/sosial/detail/<?= $sos['id']; ?>" class="btn btn-primary btn-block">
                                            View
                                            </a>
                                        </div>
                                    </div>
                                </li>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- end of album -->
