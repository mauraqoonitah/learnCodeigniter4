<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar movie</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Poster</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Overview</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($movie as $mov) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $mov['poster']; ?>" alt="" class="sampul"></td>
                            <td><?= $mov['judul']; ?></td>
                            <td><?= $mov['overview']; ?></td>
                            <td><?= $mov['kategori']; ?></td>
                            <td><?= $mov['tahun']; ?></td>
                            <td>
                                <a href="" class="btn btn-success">Detail</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>