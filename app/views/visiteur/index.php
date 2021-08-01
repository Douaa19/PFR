<?php include_once APPROOT . '../views/inc/header-accueil.php'; ?>
<!-- MAIN -->
<main id="accueil">
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
    <div class="videos">
        <h1>vidéos</h1>
        <div id="carouselExampleControls" class="carousel slide" >
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
    <div class="about" id="about">
        <h1>a propos</h1>
        <div class="content">
            <img src="<?= URLROOT ?>/img/brandon-erlinger-ford-jL8QFwnuOcQ-unsplash.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla</p>
        </div>
    </div>
    <!-- SECTION ABOUT -->
    <!-- SECTION FORM FOR CLIENT -->
    <div class="date">
        <h1>Prenez votre rondez-vous</h1>
        <form action="<?php echo URLROOT ?>/VisiteurController/addClient" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">télephone</label>
              <input type="number" class="form-control" id="exampleInputPassword1" name="phone">
            </div>
            <div class="checkboxs1">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="photos" name="photos">
                <label class="form-check-label" for="inlineCheckbox1">photos</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="videos" name="videos">
                <label class="form-check-label" for="inlineCheckbox1">vidéos</label>
              </div>
            </div>
            <div class="checkboxs2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="marriage" name="marriage">
                <label class="form-check-label" for="inlineCheckbox1">marriage</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="fête" name="fête">
                <label class="form-check-label" for="inlineCheckbox2">fête</label>
              </div>
              <div<div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="anniversaire" name="anniversaire">
                <label class="form-check-label" for="inlineCheckbox3">anniversaire</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="match" name="match">
                <label class="form-check-label" for="inlineCheckbox3">match du sport</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="autre" name="autre">
                <label class="form-check-label" for="inlineCheckbox3">autre</label>
              </div>
            </div>
            <input type="submit" value="Envoyer" class="btn btn-primary" name="client">
        </form>
    </div>
    <!-- SECTION FORM FOR CLIENT -->
</main>
<!-- MAIN -->
<!-- SECTION Footer -->
<footer>
<?php include_once APPROOT . '../views/inc/footer.php'; ?>
</footer>
<!-- SECTION Footer -->
</body>
</html>