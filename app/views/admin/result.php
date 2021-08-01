<?php include_once APPROOT . '../views/inc/header-pvf.php'; ?>

    <main>
        <div class="folders mt-5">
            <h1>Dossiers</h1>
            <div class="result">
                <?php foreach($data as $row) : ?>
                <div class="card">
                    <img src="<?= URLROOT ?>/uploads/<?php echo $row->image ?>" alt="">
                    <form action="<?php echo URLROOT ?>/PostController/resultAll" method="post">
                        <div class="route strok">
                            <input type="hidden" name="id" value="<?php echo $row->id_folder; ?>">
                            <button name="submit"><h3 class="text-uppercase">Photos</h3></button>
                        </div>
                    </form>
                </div>
                <?php endforeach; ?>
                <?php foreach($data as $row) : ?>
                <div class="card">
                    <img src="<?= URLROOT ?>/uploads/<?php echo $row->image ?>" alt="">
                    <form action="<?php echo URLROOT ?>/PostController/resultAll" method="post">
                        <div class="route strok">
                            <input type="hidden" name="id" value="<?php echo $row->id_folder; ?>">
                            <button name="submit"><h3 class="text-uppercase">Vidéos</h3></button>
                        </div>
                    </form>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    
</body>
</html>