<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://<?= $_SERVER['CONTEXT_DOCUMENT_ROOT'] ?>/assets/css/general.css">
</head>
<body>
    <?php $this->view('template/header'); ?>
    <h5>Coba</h5>
    <a href="<?= BASE_URL; ?>dashboard">Klik sini</a>
</body>
</html>