<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Movie</h2>
            <form action="/movie/update/<?= $movie['id']; ?>" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $movie['slug']; ?>">

                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $movie['judul']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="poster" class="col-sm-2 col-form-label">Poster</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('poster')) ? 'is-invalid' : ''; ?>" id="poster" name="poster" value="<?= (old('poster')) ? old('poster') : $movie['poster']; ?>"">
                        <div class=" invalid-feedback">
                        <?= $validation->getError('poster'); ?>
                    </div>
                </div>
        </div>
        <div class="row mb-3">
            <label for="overview" class="col-sm-2 col-form-label">Overview</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('overview')) ? 'is-invalid' : ''; ?>" id="overview" name="overview" value="<?= (old('overview')) ? old('overview') : $movie['overview']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('overview'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>" id="kategori" name="kategori" value="<?= (old('kategori')) ? old('kategori') : $movie['kategori']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('kategori'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('tahun')) ? 'is-invalid' : ''; ?>" id="tahun" name="tahun" value="<?= (old('tahun')) ? old('tahun') : $movie['tahun']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('tahun'); ?>
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>



    </div>
</div>
</div>



<?= $this->endSection(); ?>