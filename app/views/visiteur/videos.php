<?php include_once APPROOT . '../views/inc/header-pvf.php'; ?>
<!-- MAIN -->
    <main>
        <div class="videos mt-5 footer-margin-bot">
            <h1>vidéos</h1>
                <?php if (!isset($data['error'])) { ?>
            <div class="">
                <?php foreach($data as $row) : ?>
                <div class="vid">
                    <h3><?php echo $row->title; ?></h3>
                    <video controls="controls" src="<?= URLROOT ?>/uploads/<?php echo $rows->video ?>" video="web/mp4" class="d-block w-100"></video>
                </div>
                <?php endforeach; ?>
                <?php }else { ?>
                <div class="error text-light text-center text-uppercase fw-bold bg-danger p-1">
                    <span><?php echo $data['error'];?></span>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
<!-- MAIN -->
</body>
</html>