<?php include_once APPROOT . '../views/inc/header-pvf.php'; ?>



    <main>
        <div class="photos mt-5">
            <h1>photos</h1>
            <div class="galery">
                <?php foreach($data as $row) : ?>
                <div class="img">
                    <h3><?php echo $row->title ?></h3>
                    <img src="<?= URLROOT ?>/uploads/<?php echo $row->image ?>">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>


    
</body>
</html>

<footer>
<?php include_once APPROOT . './views/inc/footer.php'; ?>
</footer>