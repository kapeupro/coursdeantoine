<?php
require('inc/fonction.php');

// request au bdd
//// traitement de formulaire
/// /?nom=quidel&prenom=antoine&age=43
//echo $_GET['nom'];
//debug($_GET);
$errors = array();
// existe et n'est pas vide
if(!empty($_POST['submitted'])) {
    //echo 'OK FORMULAIRE SOUMIS';
    // Faille XSS
    $nom     = trim(strip_tags($_POST['nom']));
    $prenom  = trim(strip_tags($_POST['prenom']));
    $message = trim(strip_tags($_POST['message']));
    $mail    = trim(strip_tags($_POST['mail']));
    // Validation
    // nom renseigner min 3, max 50
//    if(!empty($nom)) {
//        // Si moins de 3 caractères => error => mb_strlen($nom)
//        if(mb_strlen($nom) < 3) {
//            $errors['nom'] = 'Min 3 caractères';
//        // Sinon si plus de 50 caractères.  => error
//        } elseif (mb_strlen($nom) > 50) {
//            $errors['nom'] = 'Max 50 caractères';
//        } else {
//            // no error sur nom
//        }
//    } else {
//        $errors['nom'] = 'Veuillez renseigner ce champ.';
//    }
    // prenom renseigner min 2 , max 80
//    if(!empty($prenom)) {
//        if(mb_strlen($prenom) < 2) {
//            $errors['prenom'] = 'Min 2 caractères';
//        } elseif (mb_strlen($prenom) > 80) {
//            $errors['prenom'] = 'Max 80 caractères';
//        }
//    } else {
//        $errors['prenom'] = 'Veuillez renseigner ce champ.';
//    }

    // validation message
        // renseigner min 10 max 500
//    if(!empty($message)) {
//        if(mb_strlen($message) < 10) {
//            $errors['message'] = 'Min 10 caractères';
//        } elseif (mb_strlen($message) > 500) {
//            $errors['message'] = 'Max 500 caractères';
//        }
//    } else {
//        $errors['message'] = 'Veuillez renseigner ce champ.';
//    }
    $errors = textValidation($errors,$nom,'nom');
    $errors = textValidation($errors,$prenom,'prenom',2,80);
    $errors = textValidation($errors,$message,'message',10,500);

    // validation mail
//    if(!empty($mail)) {
//        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
//            $errors['mail'] = 'Veuillez renseigner un email valid';
//        }
//    } else {
//        $errors['mail'] = 'Veuillez renseigner un email';
//    }
    $errors = emailValidation($errors,$mail,'mail');
    // If no error
    if(count($errors) == 0) {
        die('ok ici aucune error');
        // envoyer un mail
        // insertion en bdd
        // redirection
    }
}
debug($_POST);
debug($errors);

if(!empty($_POST['submitted2']))  {
    echo 'OK FORMULAIRE SOUMIS 222222222';
}
include('inc/header.php'); ?>
    <form action="" method="post" class="wrapform" novalidate>
        <label for="nom">Nom *</label>
        <input type="text" name="nom" id="nom" value="<?php if(!empty($_POST['nom'])) {echo $_POST['nom']; } ?>">
        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>

        <label for="prenom">Prénom *</label>
        <input type="text" name="prenom" id="prenom" value="<?php if(!empty($_POST['prenom'])) {echo $_POST['prenom']; } ?>">
        <span class="error"><?php if(!empty($errors['prenom'])) {echo $errors['prenom']; } ?></span>

        <label for="message">Message</label>
        <textarea name="message" id="message"><?php if(!empty($_POST['message'])) {echo $_POST['message']; } ?></textarea>
        <span class="error"><?php if(!empty($errors['message'])) {echo $errors['message']; } ?></span>


        <label for="mail">E-mail</label>
        <input type="email" id="mail" name="mail" value="<?php if(!empty($_POST['mail'])) {echo $_POST['mail']; } ?>">
        <span class="error"><?php if(!empty($errors['mail'])) {echo $errors['mail']; } ?></span>

        <input type="submit" name="submitted" value="Envoyer">
    </form>

    <h2>Formulaire numéro 2</h2>
    <form action="" method="post">
        <input type="submit" name="submitted2" value="Envoyer">
    </form>

<?php include('inc/footer.php');

