<?php include_once APPROOT . '../views/inc/header-accueil.php'; ?>




<main id="accueil">
    <div class="photos mt-5">
        <h1>photos</h1>
        <div class="galery">
            <?php foreach($data as $rows) : ?>
            <div class="img">
                <h3><?php echo $rows->title ?></h3>
                <img src="./public/uploads/<?php echo $rows->image ?>" alt="">
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Videos section -->

    <div class="videos">
        <h1>vidéos</h1>

        <div id="carouselExampleControls" class="carousel slide" >
            <div class="carousel-inner">
              <div class="carousel-item active">

                <video controls="controls" src="./public/vid/Creative short film- Wonderful little world.mp4" video="web/mp4" class="d-block w-100"></video>

              </div>
              <div class="carousel-item">

              <video controls="controls" src="./public/vid/Nature Beautiful short video 720p HD.mp4" video="web/mp4" class="d-block w-100"></video>
              
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

    <!-- About section -->

    <div class="about" id="about">
        <h1>a propos</h1>
        <div class="content">
            <img src="./public/img/brandon-erlinger-ford-jL8QFwnuOcQ-unsplash.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla</p>
        </div>
    </div>

    <!-- Date section -->

    <div class="date">
        <h1>Prenez votre rondez-vous</h1>
        <form action="#">
            <div class="email">
                <label for="email">Adresse email :</label>
                <input type="text" name="email_client" id="email" placeholder="">
            </div>
            <div class="phone">
                <label for="phone">Numéro de télephone :</label>
                <input type="tel" name="phone_client" id="phone" placeholder="">
            </div>
            <div class="gender">
                <label for="gender">Genre :</label>
                <div class="check_1">
                    <label for="photo">Pohot</label>
                    <input type="checkbox" name="photo" id="gender">
                    <label for="video">Video</label>
                    <input type="checkbox" name="video" id="gender">
                </div>
            </div>
            <div class="event">
                <label for="event">Occasion :</label>
                <div class="check_1">
                    <label for="marriage">Marriage</label>
                    <input type="checkbox" name="marriage" id="event">
                    <label for="party">Party</label>
                    <input type="checkbox" name="party" id="event">
                    <label for="birth-day">Birth-day</label>
                    <input type="checkbox" name="birth-day" id="event">
                    <label for="shooting">Shooting</label>
                    <input type="checkbox" name="shooting" id="event">
                    <label for="game">Game</label>
                    <input type="checkbox" name="game" id="event">
                    <label for="other">Other</label>
                    <input type="checkbox" name="other" id="event">
                </div>
            </div>
            <div class="btn">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>

</main>

<!-- Footer -->

<footer>
<?php include_once APPROOT . '../views/inc/footer.php'; ?>
</footer>


</body>
</html>