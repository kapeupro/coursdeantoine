<?php
require('inc/fonction.php');
$errors = array();

if(!empty($_POST['submitted'])) {
    if($_FILES['image']['error'] > 0) {
        if($_FILES['image']['error'] != 4) {
            $errors['image'] = 'Error numéro ' . $_FILES['image']['error'];
        } else {
            $errors['image'] = 'Veuillez renseigner une image SVP.';
        }
    } else {
        //debug($_FILES);
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp  = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        // Taille du fichier
        $sizeMax = 2000000; // 2mo
        if($file_size > $sizeMax || filesize($file_tmp) > $sizeMax) {
            $errors['image'] = 'Votre fichier est trop volumineux. (max 2mo)';
        } else {
            // type du fichier
            $goodMimeType = array('image/png','image/jpeg','image/gif');
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime = finfo_file($finfo,$file_tmp);
            finfo_close($finfo);
            if(!in_array($mime,$goodMimeType)) {
                $errors['image'] = 'Veuillez télécharger une image de type jpg, jpeg, png ou gif';
            } else {
                // upload
                // extension
                $i_point = strrpos($file_name,'.');
                $ext = substr($file_name, $i_point, strlen($file_name) - $i_point);
                // il faut absolument renommer le fichier.
                $newNameFile = date('Y_m_d_H_i_s') . '_original' . $ext;
                if(!is_dir('upload')) {
                    mkdir('upload');
                }
                if(move_uploaded_file($file_tmp,'upload/'.$newNameFile)) {
                    die('ok');
                }
            }
        }
    }
}

include('inc/header.php'); ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" name="submitted" value="Upload image">
        <span class="error"><?php if(!empty($errors['image'])) { echo $errors['image']; } ?></span>
    </form>
<?php include('inc/footer.php');