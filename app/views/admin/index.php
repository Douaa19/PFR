<?php include_once APPROOT . '../views/inc/header-index.php'; ?>

<?php 
    echo 'DATA';
    echo var_dump($data);
    echo '<br>';
?>

<main>

    <div class="login">
    <form action="<?php echo URLROOT ?>/AdminController/login" method="post">
        <div class="email">
            <label for="email">Adresse email</label>
            <input type="text" name="email" id="email" value="<?php if(isset($data['email'])) { echo $data['email']; }?>">
            <span class="text-danger"><?php if(isset($data['email_error'])) { echo $data['email_error']; } ?></span>
        </div>
        <div class="password">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <span class="text-danger"><?php if(isset($data['password_error'])) { echo $data['password_error']; } ?></span>
        </div>
        <div class="button">
            <input type="submit" name="submit_login" value="Entrer" class="custom-btn btn-3">
        </div>
    </form>
    </div>

</main>







</body>
</html>