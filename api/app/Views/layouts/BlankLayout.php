<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" class="custom-scrollbar">

<?= $this->include('templates/Head') ?>

<body class="bg-primary-subtle" style="padding-top: 6em">

<?= $this->include('templates/NavbarBlank') ?>


<?= $this->renderSection('content') ?>


<?= $this->include('templates/Footer') ?>

</body>
</html>
