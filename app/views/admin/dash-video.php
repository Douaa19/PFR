<?php include_once APPROOT . '../views/inc/header-dash-pvf.php'; ?>

<main>
    <div class="container">
        <h1  class="mt-5">postes</h1>
        <div class="add">
             <a href="<?php echo URLROOT; ?>/PostController/addVideoPage" class="button primary new">Ajouter</a>
        </div>
        <div class="cards">
            <!-- Foreache loop -->
            <?php foreach ($data as $row) : ?>
            <div class="card">
              <video src="<?= URLROOT ?>/uploads/<?php echo $row->video ?>" controls></video>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row->title ?></h5>
                <p class="card-text"><?php echo $row->description ?></p>
                <span><?php echo $row->tag ?></span>
              </div>
              <div class="actions">
                    <form action="<?php echo URLROOT ?>/PostController/editVideo" method="post">
                        <input type="hidden" name="id" value="<?php echo $row->id ?>">
                        <input type="hidden" name="image" value="<?php echo $row->video ?>">
                        <button type="submit" name="btn-edit" class="button primary edit btn-success">Modifier  <i class="far fa-edit"></i></button>
                    </form>
                    <form action="<?php echo URLROOT ?>/PostController/deleteVideo" method="post">
                        <input type="hidden" name="id" value="<?php echo $row->id ?>">
                        <input type="hidden" name="video" value="<?php echo $row->video ?>">
                        <button type="submit" name="btn-delete" class="button primary delete btn-danger">Supprimer  <i class="far fa-trash-alt"></i></button>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- End foreache loop -->
        </div>
    </div>
</main>
<!-- MAIN -->
<!-- SECTION FOOTER -->
<footer>
    <?php include_once APPROOT . '../views/inc/footer.php'; ?>
</footer>

</body>
</html>