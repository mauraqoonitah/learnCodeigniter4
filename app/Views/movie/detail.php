<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Detail Movie</h1>

            <div class="card mb-3 mt-3" style="max-width: 90%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img" src="/img/<?= $movie['poster']; ?>" alt="Card image cap">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie['judul']; ?></h5>
                            <p class="card-text text-muted">(<?= $movie['tahun']; ?>)</p>

                            <p class="card-text"><?= $movie['overview']; ?></p>
                            <h6>Kategori:</h6>
                            <p class="card-text"><?= $movie['kategori']; ?></p>

                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                            <br><br>
                            <a href="/movie" class="btn btn-primary">Kembali</a>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
</div>

<?= $this->endSection(); ?>