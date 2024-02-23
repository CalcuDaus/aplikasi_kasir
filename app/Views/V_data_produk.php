<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- section title -->
<section class="container title-container">
    <article class="row">
        <div class="col">
            <h2><?= $title ?></h2>
        </div>
    </article>
</section>
<!-- end section title -->
<!-- section main content -->
<section class="container container-content mt-2">
    <div class="row my-2">
    
    </div>
    <!-- S : Data Table -->
    <div class="row w-100">
        <div class="col custom-card shadow-card overflow-x-auto position-relative">
            <div class="mt-2">
                <table id="example" class="display hover" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($produk as $p) : ?>
                            <tr>
                                <td><?= $p['NamaProduk'] ?></td>
                                <td><?= $p['Harga'] ?></td>
                                <td><?= $p['Stok'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <!-- E : Data Table -->
</section>
<!-- end section main content -->
<script>
    document.querySelectorAll('.nav-btn')[3].classList.add('nav-btn-active')
</script>
<?= $this->endSection(); ?>