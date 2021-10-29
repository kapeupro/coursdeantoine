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
    debug($_POST);
    // Faille XSS
    $nom = trim(strip_tags($_POST['nom']));
    $prenom = trim(strip_tags($_POST['prenom']));
    // Validation
    // nom
    if(empty($nom)) {
        $errors['nom'] = 'Veuillez renseigner ce champ.';
    }

    // If no error
    if(count($errors) == 0) {
        // envoyer un mail
        // insertion en bdd
        // redirection
    }
}
debug($errors);

if(!empty($_POST['submitted2']))  {
    echo 'OK FORMULAIRE SOUMIS 222222222';
}
include('inc/header.php'); ?>


<h1>Les formulaires</h1>

    <form action="" method="post" novalidate>
        <label for="nom">Nom *</label>
        <input type="text" name="nom" id="nom" value="<?php if(!empty($_POST['nom'])) {echo $_POST['nom']; } ?>">
        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>

        <label for="prenom">Prénom *</label>
        <input type="text" name="prenom" id="prenom" value="<?php if(!empty($_POST['prenom'])) {echo $_POST['prenom']; } ?>">
        <span class="error"></span>

        <input type="submit" name="submitted" value="Envoyer">
    </form>
    <form action="" method="post">
        <input type="submit" name="submitted2" value="Envoyer">
    </form>

<?php include('inc/footer.php');

