<?= $this->extend('layouts/DefaultLayout') ?>

<?= $this->section('content') ?>
<main class="container justify-content-center align-items-center d-flex">
    <div class="card ms-3 me-3 w-50">
        <div class="card-header">
            <h3>
                Willkommen
                <?php
                    echo $_COOKIE['username']. " " . $_COOKIE['userlastname'];
                ?>!
            </h3>
        </div>
        <div class="card-body">
            <div class="container text-wrap">
                <h5>
                    Sie haben sich erfolgreich angemeldet! Du kannst nun das Spiel starten.
                </h5>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>
