<nav class="stroke col-6">
    <ul class="row">
        <li class="col-1"><a href="<?php echo URLROOT; ?>/PostController/index" class="hov text-light">Accueil</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/PostController/foldersPhotos" class="hov text-light">Photos</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/PostController/foldersVideos" class="hov text-light">Vidéos</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/PostController/dashboard" class="hov text-light">Dashboard</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/AdminController/killSession" class="hov text-light">Déconnexion</a></li>
        <form action="<?php echo URLROOT; ?>/AdminController/search" method="POST" class="col-3">
            <input type="text" name="search" id="search" placeholder="Recherche">
            <button type="submit" name="submit_search" class="btn hover-none"><i class="fas fa-search text-light"></i></button>
        </form>
    </ul>
</nav>