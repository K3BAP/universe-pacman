<?= $this->extend('layouts/DefaultLayout') ?>

<?= $this->section('content') ?>
<main class="justify-content-center align-items-center d-flex flex-column">
<!--    <header class="text-center py-4">-->
<!--        <h1 class="display-4">UNIVERSE LAN XXX - Rosette Nebula</h1>-->
<!--    </header>-->

    <div class="container-md d-flex flex-column align-items-center">
        <?php
        $ip = $_SERVER['REMOTE_ADDR'] ?? null;
        if (!is_null($ip)) {
            ?>
            <div class="card bg-secondary text-white mb-4 px-2 w-auto align-items-center">
                <div class="card-body d-flex justify-content-between mt-1">
                    <h5 class="card-title">Deine IP-Adresse:</h5>
                    <h5 class="card-text" id="local-ip"><?= $_SERVER['REMOTE_ADDR'] ?></h5>
                </div>
            </div>
            <?php
        }
        ?>

        <?= $this->include('templates/LanInfo') ?>
    </div>
</main>
<?= $this->endSection() ?>
