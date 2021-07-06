<?php include_once APPROOT . '../views/inc/header.php'; ?>




<main>
    <div class="photos">
        <h1>photos</h1>
        <div class="galery">
            <div class="img">
                <h3>Titre</h3>
                <img src="./public/img/alexander-andrews-lMpoDibrEmY-unsplash.jpg" alt="">
            </div>
            <div class="img">
                <h3>Titre</h3>
                <img src="./public/img/alexander-andrews-sNPfZxrBYdQ-unsplash.jpg" alt="">
            </div>
            <div class="img">
                <h3>Titre</h3>
                <img src="./public/img/alexander-andrews-VLGWE_SumrA-unsplash.jpg" alt="">
            </div>
            <div class="img">
                <h3>Titre</h3>
                <img src="./public/img/paul-gaudriault-cwy9yVBBPxg-unsplash.jpg" alt="">
            </div>
            <div class="img">
                <h3>Titre</h3>
                <img src="./public/img/portuguese-gravity-PjlbfW1mvWE-unsplash.jpg" alt="">
            </div>
            <div class="img">
                <h3>Titre</h3>
                <img src="./public/img/jonathan-talbert-VtIQwaUn-GE-unsplash.jpg" alt="">
            </div>
            <div class="img">
                <h3>Titre</h3>
                <img src="./public/img/alexander-andrews-lMpoDibrEmY-unsplash.jpg" alt="">
            </div>
            <div class="img">
                <h3>Titre</h3>
                <img src="./public/img/paul-gaudriault-cwy9yVBBPxg-unsplash.jpg" alt="">
            </div>
            <div class="img">
                <h3>Titre</h3>
                <img src="./public/img/alexander-andrews-sNPfZxrBYdQ-unsplash.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="videos">
        <h1>vidéos</h1>
    </div>

    <div class="about">
        <h1>a propos</h1>
        <div class="content">
            <img src="./public/img/brandon-erlinger-ford-jL8QFwnuOcQ-unsplash.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla</p>
        </div>
    </div>

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
                    <input type="checkbox" name="photo" id="gender">
                    <input type="checkbox" name="video" id="gender">
                </div>
            </div>
            <div class="event">
                <label for="event">Occasion :</label>
                <div class="check_1">
                    <input type="checkbox" name="marriage" id="event">
                    <input type="checkbox" name="party" id="event">
                    <input type="checkbox" name="birth-day" id="event">
                    <input type="checkbox" name="shooting" id="event">
                    <input type="checkbox" name="game" id="event">
                    <input type="checkbox" name="other" id="event">
                </div>
            </div>
            <div class="btn">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>

</main>


<footer>
<?php include_once APPROOT . '../views/inc/footer.php'; ?>
</footer>


</body>
</html>