<?php include_once APPROOT . '../views/inc/normal-header1.php'; ?>

    <main>
        <div class="container">
            <h1 class="mt-6">Postes</h1>
            <div class="add">
                <a href="<?php echo URLROOT; ?>/PosteController/add" class="col-2"><button type="button" name="ajouter" class="btn btn-outline-primary">Ajouter <i class='fas fa-plus'></i></button></a>
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
                        <a class="button primary edit">Edit</a>
                        <a class="button primary delete">Delete</a>
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