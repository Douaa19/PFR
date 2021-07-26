<?php include_once APPROOT . '../views/inc/header-photos-admin.php'; ?>



    <main>
        <div class="photos mt-5">
            <a href=""><h1>photos</h1></a>
            <div class="galery">
                <?php foreach($data as $row) : ?>
                <div class="img">
                    <h3><?php echo $row->title ?></h3>
                    <img src="../public/uploads/<?php echo $row->image ?>">
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