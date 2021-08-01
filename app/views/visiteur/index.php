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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="height: 40rem;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="height: 40rem;">
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
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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