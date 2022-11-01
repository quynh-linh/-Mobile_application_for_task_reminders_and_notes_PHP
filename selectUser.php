<?php include './inc/handle.php' ?>
<?php
    if (isset($_POST['user_name'])) {
        $insert = $jsonUser->selectUser($_POST['user_name']);
    } 
?>