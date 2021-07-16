<?php include_once APPROOT . '../views/inc/header-admin.php'; ?>

<?php

    // if (!isset($_SESSION['name'])) {
    //     session_start();
    //     header('Location:' . URLROOT . '/' . 'AdminController/accueil');
    // }
?>

<main>

    <div class="login">
    <form action="<?php echo URLROOT ?>/AdminController/login" method="post">
        <div class="email">
            <label for="email">Adresse email</label>
            <input type="text" name="email" id="email">
            <span><?php if(isset($data1['empty_email'])) { echo $data1['empty_email']; } ?></span>
        </div>
        <div class="password">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <span><?php if(isset($data1['empty_password'])) { echo $data1['empty_password']; } ?></span>
        </div>
        <div class="button">
            <input type="submit" name="submit_login" value="Entrer">
        </div>
    </form>
    </div>

</main>







</body>
</html>