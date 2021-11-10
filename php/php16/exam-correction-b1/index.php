<?php
include('inc/pdo.php');
include('inc/fonction.php');
// Traitement PHP
$errors = array();
$success = false;
if(!empty($_POST['submitted'])) {
    $email   = clean($_POST['email']);
    $message = clean($_POST['message']);
    // Validation
    $errors = emailValidation($errors,$email,'email');
    $errors = textValid($errors,$message,'message',5,2000);
    if(count($errors) == 0) {
        // insert avec protection des injections SQL
        $sql = "INSERT INTO contact VALUES (null,:email,:message,NOW())";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email,PDO::PARAM_STR);
        $query->bindValue(':message',$message,PDO::PARAM_STR);
        $query->execute();

        $success = true;
    }
}
include('inc/header.php'); ?>
<section id="slider">
    <img src="asset/img/image-fond.jpg" alt="image de feu">
    <div class="wrap2 boiteencadre">
        <p>Les offres par région</p>
    </div>
</section>
<div class="wrap3">
    <section id="formulaire">
        <?php if($success) { ?>
            <p class="success">Merci pour votre message.</p>
        <?php } else  { ?>
            <form action="index.php#formulaire" method="post" novalidate>
                <input type="email" name="email" placeholder="Votre mail" value="<?php if(!empty($_POST['email'])) { echo $_POST['email']; } ?>">
                <p class="error"><?php if(!empty($errors['email'])) {echo $errors['email'];} ?></p>
                <textarea name="message" placeholder="Votre message"><?php if(!empty($_POST['message'])) { echo $_POST['message']; } ?></textarea>
                <p class="error"><?php if(!empty($errors['message'])) {echo $errors['message'];} ?></p>
                <input type="submit" name="submitted" value="Envoyer">
            </form>
        <?php } ?>
    </section>
</div>
<?php include('inc/footer.php');
