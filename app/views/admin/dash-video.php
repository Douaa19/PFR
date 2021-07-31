<?php include_once APPROOT . '../views/inc/header-dash-pvf.php'; ?>

<main>
    <div class="container">
        <h1  class="mt-5">postes</h1>
        <div class="add">
             <a href="<?php echo URLROOT; ?>/PostController/addVideo" class="button primary new">Ajouter</a>
        </div>
        <div class="cards">
                <!-- Foreache loop -->
                <div class="card">
                  <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" controls></video>
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="actions">
                        <form action="<?php echo URLROOT ?>/PostController/editVideo" method="post">
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="image" value="">
                            <button type="submit" name="btn-edit" class="button primary edit btn-success">Modifier  <i class="far fa-edit"></i></button>
                        </form>
                        <form action="<?php echo URLROOT ?>/PostController/deleteVideo" method="post">
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="image" value="">
                            <button type="submit" name="btn-delete" class="button primary delete btn-danger">Supprimer  <i class="far fa-trash-alt"></i></button>
                        </form>
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