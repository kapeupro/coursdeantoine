<?php

session_start();

require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');


//debug($GLOBALS);
$errors = [];
if(!empty($_POST['submitted'])) {

    // Faille XSS


    // request à la bdd si il existe un user qui possede soit ce pseudo soit cet email
        // si user exist => $user
            // password_verify

                // true =>

                    $_SESSION['user'] = array(
                        'id'      => $user['id'],
                        'email'   => $user['email'],
                        'pseudo'  => $user['pseudo'],
                        'role'    => $user['role'],
                        'ip'      => $_SERVER['REMOTE_ADDR'] // ::1
                    );

                    // echo $_SESSION['user']['id']





}

include('inc/header.php'); ?>
    <form action="" method="post" class="wrapform" novalidate>

        <label for="login">E-mail or pseudo</label>
        <input type="text" id="login" name="login" value="<?= recupInputValue('login'); ?>">
        <span class="error"><?= viewError($errors,'login'); ?></span>

        <label for="password">Mot de passe *</label>
        <input type="password" id="password" name="password" value="">

        <input type="submit" name="submitted" value="Inscription">
    </form>
<?php include('inc/footer.php');