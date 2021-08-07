<?php include_once APPROOT . '../views/inc/header-pvf.php'; ?>
<!-- MAIN -->
<main>
        <div class="photos mt-5 footer-margin-bot">
            <?php var_dump($data); ?>
            <?php foreach($data as $value) {
                echo '<br>';
                echo $value->title;
                echo '<br>';
                echo $value->description;
                echo '<br>';
                echo $value->tag;
                echo '<br>';
                echo '<br>';
            } ?>
        </div>
    </main>
<!-- MAIN -->
</body>
</html>