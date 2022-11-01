<?php include './inc/handle.php' ?>
<?php
    if (isset($_POST['fullname']) || isset($_POST['phone']) || isset($_POST['birthday']) || isset($_POST['nameLogin']) ) {
        $insert = $jsonUser->updateUser($_POST['fullname'],$_POST['birthday'],$_POST['phone'],$_POST['nameLogin']);
    } 
?>