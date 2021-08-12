<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= URLROOT ?>/css/style-pvf.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/style-footer.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/style-result.css">


</head>
<body>
    <header>
        <div class="header bg-dark text-light">
            <div class="head">
                <?php if(isset($_SESSION['name'])) { ?>
                <div class="vide col-1"></div>
                <div class="logo col-4">
                    <a href="<?php echo URLROOT; ?>/AdminController/accueil" aria-label="index"><img src="<?= URLROOT ?>/img/white-logo.png" alt="STUDYOU"></a>
                </div>
                <?php include_once APPROOT . '../views/inc/navbar-admin.php'; ?>
                <div class="vid col-1"></div>
                <?php }else{ ?>
                <div class="vide col-1"></div>
                <div class="logo col-5">
                    <a href="<?php echo URLROOT; ?>/VisiteurController/index" aria-label="index"><img src="<?= URLROOT ?>/img/white-logo.png" alt="STUDYOU"></a>
                </div>
                <?php include_once APPROOT . '../views/inc/navbar-visiteur.php'; ?>
                <div class="vid col-1"></div>
                <?php } ?>
            </div>
        </div>
    </header>