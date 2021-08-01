<?php include_once APPROOT . './views/inc/header-accueil.php'; ?>



<main>

    <!-- Photos section -->
    <div class="photos mt-5">
        <h1><a href="">photos</a></h1>
        <div class="galery">
        <?php foreach($data as $row) : ?>
            <div class="img">
                <h3><?php echo $row->title; ?></h3>
                <img src="<?= URLROOT ?>/uploads/<?php echo $row->image ?>">
            </div>
        <?php endforeach; ?>
        </div>
    </div>

    <!-- Videos section -->

    <div class="videos">
        <a href=""><h1>vidéos</h1></a>

        <div id="carouselExampleControls" class="carousel slide" >
            <div class="carousel-inner">
              <div class="carousel-item active">

                <video controls="controls" src="<?= URLROOT ?>/vid/Creative short film- Wonderful little world.mp4" video="web/mp4" class="d-block w-100"></video>

              </div>
              <div class="carousel-item">

              <video controls="controls" src="<?= URLROOT ?>/vid/Nature Beautiful short video 720p HD.mp4" video="web/mp4" class="d-block w-100"></video>
              
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>




    </div>

    <!-- About section -->

    <div class="about">
        <h1>a propos</h1>
        <div class="content">
            <img src="../public/img/brandon-erlinger-ford-jL8QFwnuOcQ-unsplash.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla</p>
        </div>
    </div>
    

</main>






</body>
</html>

<footer>
    <?php include_once APPROOT . '../views/inc/footer.php'; ?>
</footer>

