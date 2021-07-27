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

    <link rel="stylesheet" href="../public/css/style-a-accueil.css">
    <link rel="stylesheet" href="../public/css/style-footer.css">


</head>
<body>
    <header>
        <div class="header bg-dark text-light pt-3">
            <div class="head">
                <div class="vide col-1"></div>
                <div class="logo col-5">
                    <a href="<?php echo URLROOT; ?>/VisiteurController/index"><img src="../img/white-logo.png" alt="STUDYOU"></a>
                </div>
                <nav class="stroke col-5">
                    <ul class="row">
                        <li class="col-1"><a href="<?php echo URLROOT; ?>/VisiteurController/index" class="hov text-light">Accueil</a></li>
                        <li class="col-1"><a href="<?php echo URLROOT; ?>/VisiteurController/pagePhotos" class="hov text-light">Photos</a></li>
                        <li class="col-1"><a href="<?php echo URLROOT; ?>/VisiteurController/pageVideos" class="hov text-light">Vidéos</a></li>
                        <li class="col-1"><a href="<?php echo URLROOT; ?>/VisiteurController/index" class="hov text-light">A propos</a></li>
                        <form action="<?php echo URLROOT; ?>/VisiteurController/search" method="POST" class="col-3">
                            <input type="text" name="search" id="search" placeholder="Recherche">
                            <button type="submit" name="submit_search" class="btn hover-none"><i class="fas fa-search text-light"></i></button>
                        </form>
                    </ul>
                </nav>
            </div>
            <div class="slogon">
                <span>On prise le moment</span>
            </div>
        </div>
    </header>