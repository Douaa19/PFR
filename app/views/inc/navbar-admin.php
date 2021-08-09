<nav class="stroke col-6">
    <ul class="row">
        <li class="col-1"><a href="<?php echo URLROOT; ?>/PostController/index" class="hov text-light">Accueil</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/PostController/foldersPhotos" class="hov text-light">Photos</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/PostController/foldersVideos" class="hov text-light">Vidéos</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/PostController/dashboard" class="hov text-light">Dashboard</a></li>
        <li class="col-1"><a href="<?php echo URLROOT; ?>/AdminController/killSession" class="hov text-light">Déconnexion</a></li>
        <form action="<?php echo URLROOT; ?>/AdminController/search" method="POST" class="form-inline col-3">
          <input type="search" name="name" id="search" class="form-control mr-sm-2"  placeholder="Recherche" aria-label="Search">
          <button name="submit_search" class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search text-light"></i></button>
        </form>
    </ul>
</nav>


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->