<?= $this->extend('layouts/DefaultLayout') ?>

<?= $this->section('content') ?>
<main class="container justify-content-center align-items-center d-flex">
    <div class="card ms-3 me-3">
        <div class="card-header">
            <h3>
                Hallo
                <?php
                echo $_COOKIE['username']. " " . $_COOKIE['userlastname'];
                ?>!
            </h3>
        </div>
        <div class="card-body">
            <div class="container text-wrap">
                <h5>
<!--                    TODO-->
                    TODO
                </h5>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>
