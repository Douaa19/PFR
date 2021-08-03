<nav class="stroke col-5">
    <ul class="row">
        <li class="col-1"><a href="<?php echo URLROOT; ?>/VisiteurController/index" class="hov text-light">Accueil</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/VisiteurController/foldersPhotos" class="hov text-light">Photos</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/VisiteurController/foldersVideos" class="hov text-light">Vidéos</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/VisiteurController/index" class="hov text-light">A propos</a></li>
        <form action="<?php echo URLROOT; ?>/VisiteurController/search" method="POST" class="form-inline col-3">
          <input type="search" name="name" id="search" class="form-control mr-sm-2"  placeholder="Recherche" aria-label="Search">
          <button name="submit_search" class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search text-light"></i></button>
        </form>
    </ul>
</nav>