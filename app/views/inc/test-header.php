<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="<?= URLROOT ?>/css/style-pvf.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/style-add.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/style-footer.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/style-dash-pvf.css"> -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <title>Header Dashboard</title>
</head>
<body>

    <header>
        <div class="header bg-dark text-light pt-3">
            <div class="head">
                <div class="vide col-1"></div>
                <div class="logo col-5">
                    <a href="<?php echo URLROOT; ?>/AdminController/accueil"><img src="<?= URLROOT ?>/img/white-logo.png" alt="STUDYOU"></a>
                </div>
                <?php include_once APPROOT . '../views/inc/navbar-dash.php'; ?>
            </div>
        </div>
    </header>