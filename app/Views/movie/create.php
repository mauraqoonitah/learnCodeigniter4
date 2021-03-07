<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Movie</h2>

            <form action="/movie/save" method="POST">
                <?= csrf_field(); ?>

                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="poster" class="col-sm-2 col-form-label">Poster</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="poster" name="poster">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="overview" class="col-sm-2 col-form-label">Overview</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="overview" name="overview">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kategori" name="kategori">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tahun" name="tahun">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>



        </div>
    </div>
</div>



<?= $this->endSection(); ?>