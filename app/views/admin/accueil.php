<?php include_once APPROOT . './views/inc/header-accueil.php'; ?>


<main id="accueil" class="row m-0">
  <div class="container col-10">
    <!-- SECTION PHOTOS -->
    <div class="photos mt-5 row">
        <h1 class="col-10">photos</h1>
        <a href="<?= URLROOT ?>/VisiteurController/foldersPhotos" class="col-2 text-center text-primary">voir plus <i class="fas fa-angle-right"></i></a>
        <div class="galery">
            <?php foreach($data as $rows) : ?>
            <div class="img">
                <h3><?php echo $rows->title ?></h3>
                <img src="<?= URLROOT ?>/uploads/<?php echo $rows->image ?>" alt="">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- SECTION PHOTOS -->
    <!-- SECTION VIDEOS -->
    <div class="videos row mt-5">
        <h1 class="col-10">vidéos</h1>
        <a href="<?= URLROOT ?>/VisiteurController/foldersVideos" class="col-2 text-center text-primary">voir plus <i class="fas fa-angle-right"></i></a>
        <div id="carouselExampleControls" class="carousel slide mt-5" >
            <div class="carousel-inner">
              <div class="carousel-item active">

                <video controls="controls" src="<?= URLROOT ?>/vid/Creative short film- Wonderful little world.mp4" video="web/mp4" class="d-block w-100"></video>

              </div>
              <div class="carousel-item">

              <video controls="controls" src="<?= URLROOT ?>/vid/Nature Beautiful short video 720p HD.mp4" video="web/mp4" class="d-block w-100"></video>
              
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="height: 38rem;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="height: 38rem;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- SECTION VIDEOS -->
    <!-- SECTION ABOUT -->
    <div class="about mt-5" id="about">
        <h1>a propos</h1>
        <div class="content">
            <img src="<?= URLROOT ?>/img/brandon-erlinger-ford-jL8QFwnuOcQ-unsplash.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla</p>
        </div>
    </div>
    <!-- SECTION ABOUT -->

</main>


<footer>
    <?php include_once APPROOT . '../views/inc/footer.php'; ?>
</footer>

</body>
</html>

