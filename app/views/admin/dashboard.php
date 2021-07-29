<?php include_once APPROOT . '../views/inc/header-dash.php'; ?>
    
    <main>
        <div class="container mt-5">
            <h1>Sections</h1>
            <div class="cards">
                <div class="card card1 col-3">
                    <img src="../public/img/markus-spiske-EfhOW3cYqD8-unsplash.jpg" alt="">
                    <div class="route strok"><h3><a href="<?php echo URLROOT ?>/PostController/dashPhoto" class="hov">PHOTOS</a></h3></div>
                </div>
                <div class="card card2 col-3">
                    <img src="../public/img/thomas-william-4qGbMEZb56c-unsplash.jpg" alt="">
                    <div class="route strok"><h3><a href="<?php echo URLROOT ?>/PostController/dashVideo" class="hov">VIDEOS</a></h3></div>
                </div>
                <div class="card card3 col-3">
                    <img src="../public/img/viktor-talashuk-05HLFQu8bFw-unsplash.jpg" alt="">
                    <div class="route strok"><h3><a href="<?php echo URLROOT ?>/PostController/dashFolder" class="hov">DOSSIERS</a></h3></div>
                </div>
                <div class="card card4 col-3">
                    <img src="../public/img/cytonn-photography-n95VMLxqM2I-unsplash.jpg" alt="">
                    <div class="route strok"><h3><a href="<?php echo URLROOT ?>/PostController/dashClient" class="hov">CLIENTS</a></h3></div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>

<footer>
    <?php include_once APPROOT . '../views/inc/footer.php'; ?>
</footer>