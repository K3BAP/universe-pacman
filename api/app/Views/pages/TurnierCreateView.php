<?= $this->extend('layouts/DefaultLayout') ?>

<?= $this->section('content') ?>
    <main class="container justify-content-center align-items-center d-flex">
        <div class="card ms-3 me-3 w-75">
            <div class="card-header">
                <h3>Turnier erstellen</h3>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('/turniere/create') ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="datetime-local" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="datetime-local" class="form-control" id="end_date" name="end_date" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a role="button" class="btn btn-secondary" href="<?= base_url('/turniere') ?>">Abbrechen</a>
                </form>
            </div>
        </div>
    </main>
<?= $this->endSection() ?>