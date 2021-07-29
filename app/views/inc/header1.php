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
    <link rel="stylesheet" href="<?= URLROOT ?>/css/style-index.css">
    
    <title>Header</title>
</head>
<body>
    <header>
        <div class="header row bg-dark text-light pt-3">
            <div class="head">
                <div class="vide col-1"></div>
                <div class="logo col-5">
                    <a href="#"><img src="<?= URLROOT ?>/img/white-logo.png" alt="STUDYOU"></a>
                </div>
                <nav class="stroke col-5">
                    <ul class="row">
                        <li class="col-2"><a href="#" class="a text-light">Accueil</a></li>
                        <li class="col-2"><a href="#" class="b text-light">Photos</a></li>
                        <li class="col-2"><a href="#" class="c text-light">Vidéos</a></li>
                        <li class="col-2"><a href="#" class="d text-light">A propos</a></li>
                        <li class="col-3"><input type="text" name="searche" placeholder="Recherche"></li>
                        <li class="col-1"><a href="#"><img src="<?= URLROOT ?>/img/searchLoop.png" alt="loop-icon"></a></li>
                    </ul>
                </nav>
            </div>
            <div class="slogon">
                <span>we catch the moment</span>
            </div>
        </div>
    </header>