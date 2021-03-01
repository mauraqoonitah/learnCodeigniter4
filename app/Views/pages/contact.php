<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum cum repudiandae porro voluptates officia provident dolores quaerat ea maxime amet. Tempora ipsa, corrupti cupiditate molestiae maiores voluptatem repellat a neque!</p>

            <?php foreach ($alamat as $addr) : ?>
                <ul>
                    <li><?= $addr['tipe']; ?></li>
                    <li><?= $addr['alamat']; ?></li>
                    <li><?= $addr['kota']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>