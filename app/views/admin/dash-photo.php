<?php include_once APPROOT . '../views/inc/normal-header1.php'; ?>

    <main>
        <div class="container">
            <h1>Postes</h1>
            <div class="add">
                <a href="<?php echo URLROOT; ?>/PostController/add" class="button primary new">Ajouter</a>
            </div>
            <div class="cards">
                <!-- Foreache loop -->
                <?php foreach ($data as $row) : ?>
                <div class="card">
                    <img src="../public/uploads/<?php echo $row->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row->title ;?></h5>
                        <p class="card-text"><?php echo $row->description ;?></p>
                        <span><?php echo $row->tag ;?></span>
                    </div>
                    <div class="actions">
                        <a href="<?php echo URLROOT ?>/PostController/editPhoto?id=<?php echo $row->id ;?>" class="button primary edit btn-success">Modifier  <i class="far fa-edit"></i></a>
                        <a href="<?php echo URLROOT ?>/PostController/deletePhoto?id=<?php echo $row->id ;?>" class="button primary delete btn-danger">Supprimer  <i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- End foreache loop -->
            </div>
        </div>
    </main>

</body>
</html>

<footer>
    <?php include_once APPROOT . '../views/inc/footer.php'; ?>
</footer>