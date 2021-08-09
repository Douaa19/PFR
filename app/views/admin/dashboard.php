        <?php include_once APPROOT . '../views/inc/header-dash.php'; ?>

        <main class="row m-0">
            <div class="container mt-5 col-10">
                <h1 class="text-uppercase">Sections</h1>
                <div class="contain">
                    <div class="cards mt-3 mb-5">
                        <div class="card card1 col-3">
                            <img src="<?= URLROOT ?>/img/markus-spiske-EfhOW3cYqD8-unsplash.jpg" alt="">
                            <div class="route strok"><h3><a href="<?php echo URLROOT ?>/PostController/dashPhoto" class="hov">PHOTOS</a></h3></div>
                        </div>
                        <div class="card card2 col-3">
                            <img src="<?= URLROOT ?>/img/thomas-william-4qGbMEZb56c-unsplash.jpg" alt="">
                            <div class="route strok"><h3><a href="<?php echo URLROOT ?>/PostController/dashVideo" class="hov">VIDEOS</a></h3></div>
                        </div>
                        <div class="card card3 col-3">
                            <img src="<?= URLROOT ?>/img/viktor-talashuk-05HLFQu8bFw-unsplash.jpg" alt="">
                            <div class="route strok"><h3><a href="<?php echo URLROOT ?>/PostController/dashFolder" class="hov">DOSSIERS</a></h3></div>
                        </div>
                        <div class="card card4 col-3">
                            <img src="<?= URLROOT ?>/img/cytonn-photography-n95VMLxqM2I-unsplash.jpg" alt="">
                            <div class="route strok"><h3><a href="<?php echo URLROOT ?>/AdminController/dashClient" class="hov">CLIENTS</a></h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- MAIN -->

        <!-- SECTION FOOTER -->
        <?php include_once APPROOT . '../views/inc/footer.php'; ?>
        <!-- SECTION FOOTER -->
