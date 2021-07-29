<nav class="stroke col-5">
    <ul class="row">
        <li class="col-1"><a href="<?php echo URLROOT; ?>/VisiteurController/index" class="hov text-light">Accueil</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/VisiteurController/foldersPhotos" class="hov text-light">Photos</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/VisiteurController/pageVideos" class="hov text-light">Vidéos</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/VisiteurController/index" class="hov text-light">A propos</a></li>
        <form action="<?php echo URLROOT; ?>/VisiteurController/search" method="POST" class="col-3">
            <input type="text" name="search" id="search" placeholder="Recherche">
            <button type="submit" name="submit_search" class="btn hover-none"><i class="fas fa-search text-light"></i></button>
        </form>
    </ul>
</nav>