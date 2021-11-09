<?php
require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');

$errors = [];
if(!empty($_POST['submitted'])) {
    // Faille xss
    $pseudo    = cleanXss('pseudo');
    $email     = cleanXss('email');
    $password  = cleanXss('password');
    $password2 = cleanXss('password2');
    // Validation
    $errors = textValidation($errors,$pseudo,'pseudo',3, 50);
    if(empty($errors['pseudo'])) {
        $sql = "SELECT * FROM user WHERE pseudo = :pseudo";
        $query = $pdo->prepare($sql);
        $query->bindValue(':pseudo',$pseudo,PDO::PARAM_STR);
        $query->execute();
        $verifPseudo = $query->fetch();
        if(!empty($verifPseudo)) {
            $errors['pseudo'] = 'Pseudo existe dèjà';
        }
    }
    $errors = emailValidation($errors,$email,'email');
    if(empty($errors['email'])) {
        $sql = "SELECT * FROM user WHERE email = :email";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email,PDO::PARAM_STR);
        $query->execute();
        $verifEmail = $query->fetch();
        if(!empty($verifEmail)) {
            $errors['email'] = 'Email existe dèjà';
        }
    }
    // password
    if(!empty($password) || !empty($password2)) {
        if($password != $password2) {
            $errors['password'] = 'Veuillez renseigner des mot de passe identiques';
        } elseif (mb_strlen($password2) < 6) {
            $errors['password'] = 'Min 6 caractères pour votre mot de passe';
        }
    } else {
        $errors['password'] = 'Veuillez renseigner un mot de passe';
    }


    if(count($errors) == 0) {
        // generate token
        $token = generateRandomString(100);
        // hashpassword
        $hashpassword = password_hash($password,PASSWORD_DEFAULT);
        // INSERT INTO
        $sql = "INSERT INTO user (pseudo,email,password,token,created_at,role)
                VALUES (:pseudo,:email,:password,:token,NOW(),'abonne')";
        $query = $pdo->prepare($sql);
        $query->bindValue(':pseudo',  $pseudo,      PDO::PARAM_STR);
        $query->bindValue(':email',   $email,       PDO::PARAM_STR);
        $query->bindValue(':password',$hashpassword,PDO::PARAM_STR);
        $query->bindValue(':token',   $token,       PDO::PARAM_STR);
        $query->execute();
        // redirection
        header('Location: login.php');
    }
}
include('inc/header.php'); ?>
    <form action="" method="post" class="wrapform" novalidate>
        <label for="pseudo">Pseudo *</label>
        <input type="text" id="pseudo" name="pseudo" value="<?= recupInputValue('pseudo'); ?>">
        <span class="error"><?= viewError($errors,'pseudo'); ?></span>

        <label for="email">E-mail *</label>
        <input type="email" id="email" name="email" value="<?= recupInputValue('email'); ?>">
        <span class="error"><?= viewError($errors,'email'); ?></span>

        <label for="password">Mot de passe *</label>
        <input type="password" id="password" name="password" value="">
        <span class="error"><?= viewError($errors,'password'); ?></span>

        <label for="password2">Confirmez votre mot de passe *</label>
        <input type="password" id="password2" name="password2" value="">

        <input type="submit" name="submitted" value="Inscription">
    </form>
<?php include('inc/footer.php');