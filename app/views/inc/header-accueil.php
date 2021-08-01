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

    <link rel="stylesheet" href="<?= URLROOT ?>/css/style-accueil.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/style-footer.css">


</head>
<body>
    <header>
        <div class="header bg-dark text-light pt-3">
            <div class="head">
                <?php if(isset($_SESSION['name'])) { ?>
                <div class="vide col-1"></div>
                <div class="logo col-4">
                    <a href=""><img src="<?= URLROOT ?>/img/white-logo.png" alt="STUDYOU"></a>
                </div>
                <?php include_once APPROOT . '../views/inc/navbar-admin.php'; ?>
                <?php }else{ ?>
                <div class="vide col-1"></div>
                <div class="logo col-5">
                    <a href=""><img src="<?= URLROOT ?>/img/white-logo.png" alt="STUDYOU"></a>
                </div>
                <?php include_once APPROOT . '../views/inc/navbar-visiteur.php'; ?>
                <?php } ?>
            </div>
            <div class="slogon">
                <span>On prise le moment</span>
            </div>
        </div>
    </header>