<?php include_once APPROOT . '../views/inc/header-pvf.php'; ?>
<!-- MAIN -->
<main>
    <div class="videos  mt-5">
        <h1>videos</h1>
            <?php if (!isset($data['error'])) { ?>
        <div class="video">
            
        </div>
        <?php }else { ?>
            <div class="error text-light text-center text-uppercase fw-bold bg-danger p-1">
                <span><?php echo $data['error'];?></span>
            </div>
        <?php } ?>
    </div>
</main>
<!-- MAIN -->
<!-- SECTION FOOTER -->
<footer>
<?php include_once APPROOT . '../views/inc/footer.php'; ?>
</footer>
<!-- SECTION FOOTER -->
</body>
</html>