<?= $this->extend('layouts/DefaultLayout') ?>

<?= $this->section('content') ?>
    <main class="container justify-content-center align-items-center d-flex">
        <div class="card ms-3 me-3 w-75">
            <div class="card-header">
                <h3>
                    Leaderboard
                </h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Platz</th>
                        <th scope="col">Vorname</th>
                        <th scope="col">Nachname</th>
                        <th scope="col">Score</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $place = 1;
                    foreach ($users as $user):
                        ?>
                        <tr>
                            <td><?= $place++ ?></td>
                            <td><?= $user['vorname'] ?></td>
                            <td><?= $user['nachname'] ?></td>
                            <td><?= $user['highscore'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?= $this->endSection() ?>