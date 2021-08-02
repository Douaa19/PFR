<?php include_once APPROOT . '../views/inc/header-accueil.php'; ?>
<!-- MAIN -->
<main id="accueil" class="row">
  <div class="container col-10">
    <!-- SECTION PHOTOS -->
    <div class="photos mt-5">
        <h1>photos</h1>
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
    <div class="videos mt-5">
        <h1>vidéos</h1>
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
    <!-- SECTION FORM FOR CLIENT -->
    <div class="date mt-5">
        <h1>Prenez votre rondez-vous</h1>
        <div class="form row mt-4">
          <div class="col-2"></div>
          <form action="<?php echo URLROOT ?>/VisiteurController/addClient" method="POST" class="col-8">
              <div class="email row mb-3">
                <label for="email" class="col-6">Email</label>
                <div class="col-6">
                  <input type="email" class="form-control" id="email" name="email">
                </div>
              </div>
              <div class="phone row mb-3">
                <label for="phone" class="col-6">Numéro de télephone</label>
                <div class="col-6">
                  <input type="phone" class="form-control" id="phone" name="phone">
                </div>
              </div>
              <div class="genre row">
                <label for="genre" class="col-6">Genre</label>
                <div class="check1 col-6">
                    <input class="form-check-input" type="checkbox" id="photos" value="photos" name="photos">
                    <label class="form-check-label" for="photos">Photos</label>
                    <input class="form-check-input" type="checkbox" id="videos" value="videos" name="videos">
                    <label class="form-check-label" for="videos">Vidéos</label>
                </div>
              </div>
              <div class="occasion row mt-2">
                <label for="occasion" class="col-6">Occasion</label>
                <div class="check2 col-6">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="marriage" value="marriage" name="marriage">
                    <label class="form-check-label" for="marriage">Marriage</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="fête" value="fête" name="fête">
                    <label class="form-check-label" for="fête">Fête</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="shooting" value="shooting" name="shooting">
                    <label class="form-check-label" for="shooting">Shooting</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="sport" value="sport" name="sport">
                    <label class="form-check-label" for="sport">Sport</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="anniv" value="anniv" name="anniv">
                    <label class="form-check-label" for="anniv">Anniversaire</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="autre" value="autre" name="autre">
                    <label class="form-check-label" for="autre">Autre</label>
                  </div>
                </div>
              </div>
              <div class="button mt-4 text-center">
                <input type="submit" value="Envoyer" name="envoyer" class="btn btn-primary col-2">
              </div>
          </form>
        </div>
    </div>
    <!-- SECTION FORM FOR CLIENT TO SEND HIS COMMAND-->
  </div>
</main>
<!-- MAIN -->
<!-- SECTION Footer -->
<footer>
<?php include_once APPROOT . '../views/inc/footer.php'; ?>
</footer>
<!-- SECTION Footer -->
</body>
</html>