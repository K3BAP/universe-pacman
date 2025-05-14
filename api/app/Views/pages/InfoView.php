<?= $this->extend('layouts/NoNavbarLayout') ?>

<?= $this->section('content') ?>
<main class="justify-content-center align-items-center d-flex flex-column">
    <header class="text-center py-4">
        <h1 class="display-4">UNIVERSE LAN XXX - Rosette Nebula</h1>
    </header>

    <div class="container-md d-flex flex-column align-items-center">
        <?= $this->include('templates/LanInfo') ?>
    </div>
</main>
<?= $this->endSection() ?>
