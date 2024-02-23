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
<section class="container container-content">
</section>
<!-- end section main content -->
<script>
    document.querySelectorAll('.nav-btn')[1].classList.add('nav-btn-active')
</script>
<?= $this->endSection(); ?>