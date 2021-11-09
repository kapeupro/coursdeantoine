<?php
session_start();

require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');

//debug($GLOBALS);
$errors = [];
if(!empty($_POST['submitted'])) {
    // Faille XSS
    $login    = cleanXss('login');
    $password = cleanXss('password');
    // request à la bdd si il existe un user qui possede soit ce pseudo soit cet email
    $sql = "SELECT * FROM user WHERE email = :login OR pseudo = :login";
    $query = $pdo->prepare($sql);
    $query->bindValue(':login',$login,PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();
    //debug($user);
    if(!empty($user)) {  // si user exist => $user
        // password_verify
        if(password_verify($password, $user['password'])) {
            $_SESSION['user'] = array(
                'id'      => $user['id'],
                'email'   => $user['email'],
                'pseudo'  => $user['pseudo'],
                'role'    => $user['role'],
                'ip'      => $_SERVER['REMOTE_ADDR'] // ::1
            );
            header('Location: index.php');
        } else {
            $errors['login'] = 'Error credentials number 2';
        }
    } else {
        $errors['login'] = 'Error credentials';
    }
}
//debug($_POST);
//debug($errors);

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