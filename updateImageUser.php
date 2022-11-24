<?php include './inc/handle.php' ?>
<?php
    if (isset($_POST['image']) || isset($_POST['nameLogin']) ) {
        $insert = $jsonUser->updateImageUser($_POST['image'],$_POST['nameLogin']);
    } 
?>