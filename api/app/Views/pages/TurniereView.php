<?= $this->extend('layouts/DefaultLayout') ?>

<?= $this->section('content') ?>
    <main class="container justify-content-center align-items-center">
        <div class="card ms-3 me-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Turniere</h3>
                <?php if (isset($_COOKIE['permissionLevel']) && $_COOKIE['permissionLevel'] > "1"): ?>
                    <a href="<?= base_url('/turniere/create') ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-square-plus"></i> Neu</a>
                <?php endif; ?>
            </div>
            <div class="card-body justify-content-center align-items-center text-center">
                <?php foreach ($tournaments as $tournament): ?>
                <div class="justify-content-center align-items-center ">
                    <h4><?= esc($tournament['name']) ?></h4>
                    <a href="<?= base_url('/turniere/join/') ?><?= $tournament['id'] ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-square-plus"></i> Beitreten</a>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
    </main>
<?= $this->endSection() ?>