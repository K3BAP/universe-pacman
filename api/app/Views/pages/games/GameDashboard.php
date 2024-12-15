<?= $this->extend('layouts/DefaultLayout') ?>

<?= $this->section('content') ?>
    <main class="container justify-content-center align-items-center d-flex">
        <div class="card ms-3 me-3 w-75">
            <div class="card-header">
                <h3>
                    Game Dashboard
                </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?= base_url('pacman') ?>" class="card-link">
                            <div class="card">
                                <img src="<?= base_url('resources/images/games/Pacman.jpg') ?>" class="card-img-top" alt="Pacman">
                                <div class="card-body">
                                    <h5 class="card-title">Pacman</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('game') ?>" class="card-link">
                            <div class="card h-100">
                                <img src="<?= base_url('resources/images/games/Game.jpg') ?>" class="card-img-top" alt="Game 2">
                                <div class="card-body">
                                    <h5 class="card-title">Game 2</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('game') ?>" class="card-link">
                            <div class="card h-100">
                                <img src="<?= base_url('resources/images/games/Game.jpg') ?>" class="card-img-top" alt="Game 3">
                                <div class="card-body">
                                    <h5 class="card-title">Game 3</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?= $this->endSection() ?>