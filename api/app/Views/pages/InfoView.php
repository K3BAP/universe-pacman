<?= $this->extend('layouts/NoNavbarLayout') ?>

<?= $this->section('content') ?>
<main class="justify-content-center align-items-center d-flex flex-column">

    <header class="text-center py-4 mt-1">
        <h1 class="display-4" style="text-shadow:
        0px 3px 5px rgba(0, 0, 0, 0.9), /* First layer */
        3px 3px 5px rgba(0, 0, 0, 0.8); /* Second layer for blur */">UNIVERSE LAN XXX - Rosette Nebula</h1>
    </header>



    <div class="container-md d-flex flex-column align-items-center">
        <?= $this->include('templates/LanInfo') ?>
    </div>

    <div class="card bg-secondary text-white px-2 w-auto align-items-center mt-4">
        <a href="http://universe.lan" target="_blank" class="text-decoration-none">
            <div class="card-body d-flex justify-content-between mt-1">
                <h5 class="card-title display-6">Webseite: universe.lan</h5>
            </div>
        </a>
    </div>

</main>
<?= $this->endSection() ?>
