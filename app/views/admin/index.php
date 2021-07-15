<?php include_once APPROOT . '../views/inc/header-admin.php'; ?>

<main>

    <div class="login">
    <form action="<?php echo URLROOT ?>/AdminController/login" method="post">
        <div class="email">
            <label for="email">Adresse email</label>
            <input type="text" name="email" id="email">
            <div class="error_email"><?php if(isset($data1['error_email'])) { echo $data1['error_email']; } ?></div>
        </div>
        <div class="password">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <div class="error_password"><?php if(isset($data1['error_password'])) { echo $data1['error_password']; } ?></div>
        </div>
        <div class="button">
            <input type="submit" name="submit_login" value="Entrer">
        </div>
    </form>
    </div>

</main>







</body>
</html>