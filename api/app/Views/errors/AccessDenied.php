<?= $this->extend('layouts/DefaultLayout') ?>

<?= $this->section('content') ?>
<main class="container justify-content-center align-items-center d-flex">
    <div class="card ms-3 me-3">
        <div class="card-header">
            <h3>
                Zugriff Verweigert!
            </h3>
        </div>
        <div class="card-body">
            <div class="container text-wrap">
                <h5>
                    Du hast nicht die Berechtigung, diese Seite zu sehen. <br>
                    Bitte melde dich an oder registriere dich, um Zugriff zu erhalten.
                </h5>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>
