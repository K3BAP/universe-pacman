<?= $this->extend('layouts/DefaultLayout') ?>

<?= $this->section('content') ?>
    <main class="container justify-content-center align-items-center d-flex">
        <div class="card ms-3 me-3 w-75">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="<?= base_url('pacman') ?>" class="card-link">
                            <div class="card overflow-hidden h-100">
                                <img src="<?= base_url('public/resources/images/games/Pacman/Pacman.jpg') ?>" class="card-img card-game-img" alt="Pacman">
                                <div class="card-img-overlay align-content-end">
                                    <h2 class="card-title">Pacman</h2>
                                    <p class="card-text"><small>The Classic Arcade Game</small></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="<?= base_url('game') ?>" class="card-link">
                            <div class="card overflow-hidden h-100">
                                <img src="<?= base_url('public/resources/images/games/Placeholder.jpg') ?>" class="card-img card-game-img" alt="Game 2">
                                <div class="card-img-overlay align-content-end">
                                    <h2 class="card-title">Game 2</h2>
                                    <p class="card-text"><small>Another Exciting Game</small></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="<?= base_url('game') ?>" class="card-link">
                            <div class="card overflow-hidden h-100">
                                <img src="<?= base_url('public/resources/images/games/Placeholder.jpg') ?>" class="card-img card-game-img" alt="Game 3">
                                <div class="card-img-overlay align-content-end">
                                    <h2 class="card-title">Game 3</h2>
                                    <p class="card-text"><small>Yet Another Fun Game</small></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?= $this->endSection() ?>