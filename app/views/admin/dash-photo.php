<?php include_once APPROOT . '../views/inc/normal-header1.php'; ?>

    <main>
        <div class="container">
            <h1>Postes</h1>
            <div class="add">
                <a href="<?php echo URLROOT; ?>/PostController/add" class="button primary new">New</a>
            </div>
            <div class="cards">
                <!-- Foreache loop -->

                <div class="card">
                    <img src="../public/img/alexander-andrews-VLGWE_SumrA-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span>Tags</span>
                    </div>
                    <div class="actions">
                        <a href="<?php echo URLROOT ?>/PostController/editPhoto" class="button primary edit btn-success">Edit  <i class="far fa-edit"></i></a>
                        <a href="<?php echo URLROOT ?>/PostController/deletePhoto" class="button primary delete btn-danger">Delete  <i class="far fa-trash-alt"></i></a>
                    </div>
                </div>

                <!-- End foreache loop -->
            </div>
        </div>
    </main>

</body>
</html>

<footer>
    <?php include_once APPROOT . '../views/inc/footer.php'; ?>
</footer>