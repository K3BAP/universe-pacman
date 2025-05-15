<?= $this->extend('layouts/DefaultLayout') ?>

<?= $this->section('content') ?>
    <main class="container justify-content-center align-items-center d-flex">
        <div class="card ms-3 me-3 w-75">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Turniere</h3>
                <?php if (isset($_COOKIE['permissionLevel']) && $_COOKIE['permissionLevel'] > "1"): ?>
                    <a href="<?= base_url('/turniere/create') ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-square-plus"></i> Neu</a>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <h4>Available Tournaments</h4>
                <ul>
                    <?php foreach ($tournaments as $tournament): ?>
                        <li>
                            <?= esc($tournament['name']) ?> -
                            <a href="<?= base_url('/turniere/join/') ?><?= $tournament['id'] ?>">Join</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </main>
<?= $this->endSection() ?>