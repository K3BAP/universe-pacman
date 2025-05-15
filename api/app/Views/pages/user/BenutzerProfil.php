<?= $this->extend('layouts/DefaultLayout') ?>

<?= $this->section('content') ?>
<main class="container justify-content-center align-items-center">
    <div class="row">
        <div class="col-3 col-auto">
            <div class="card">
                <div class="card-body py-0 px-0">
                    <a class="card-link">
                        <div class="card overflow-hidden h-100">
                            <img src="<?= base_url('public/resources/images/MinMaxSimple.png') ?>" class="card-img card-game-img" style="opacity: 0%" alt="Profilbild">
                            <div class="card-img-overlay align-content-center text-center">
                                <h1 class="card-title"><?= $user['vorname']. " " . $user['nachname']; ?></h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <h2 class="card-title display-5"><?= $user['vorname']. " " . $user['nachname']; ?></h2>
                    <p class="card-text">Erster LAN Besuch: <?=  ((new DateTime($user['created_at']))->format('d.m.Y') ?? '-') ?> </p>
                    <h5 class="card-text display-6"></h5><i class="fa-brands fa-discord"></i> <?= ($user_discord[0]['username'] ?? '-') ?></h5>
                </div>
            </div>
        </div>
        <div class="col-9 col-auto">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Verknüpfte Accounts
                    </h3>
                </div>
                <div class="card-body py-0 px-0">
                    <table class="table bg-transparent">
                        <thead>
                        <tr>
                            <th scope="col">Spiel</th>
                            <th scope="col">Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $place = 1;
                        foreach ($user_gameaccounts as $user_gameaccount):
                            ?>
                            <tr>
                                <td><?= $user_gameaccount['game'] ?></td>
                                <td><?= $user_gameaccount['username']. "#" . $user_gameaccount['usertag'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>
