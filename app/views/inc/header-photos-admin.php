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
    <link rel="stylesheet" href="./public/css/style-photos.css">
    <link rel="stylesheet" href="./public/css/style-footer.css">


</head>
<body>
    <header>
        <div class="header bg-dark text-light pt-3">
            <div class="head">
                <div class="vide col-1"></div>
                <div class="logo col-3">
                    <a href="#"><img src="./img/white-logo.png" alt="STUDYOU"></a>
                </div>
                <nav class="stroke col-7">
                    <ul class="row">
                        <li class="col-2"><a href="<?php echo URLROOT; ?>/PostController/index" class="hov text-light">Accueil</a></li>
                        <li class="col-2"><a href="<?php echo URLROOT; ?>/PostController/photos" class="hov text-light">Photos</a></li>
                        <li class="col-2"><a href="<?php echo URLROOT; ?>/PostController/videos" class="hov text-light">Vidéos</a></li>
                        <li class="col-2"><a href="<?php echo URLROOT; ?>/PostController/dashboard" class="hov text-light">Dashboard</a></li>
                        <li class="col-2"><input type="text" name="searche" placeholder="Recherche"></li>
                        <li class="col-1"><a href=""><img src="./img/searchLoop.png" alt="loop-icon"></a></li>
                        <li class="col-1"><a href="<?php echo URLROOT; ?>/AdminController/killSession" class="hov text-light">Déconnexion</a></li>
                    </ul>
                </nav>
            </div>
            <div class="slogon">
                <span>On prise le moment</span>
            </div>
        </div>
    </header>