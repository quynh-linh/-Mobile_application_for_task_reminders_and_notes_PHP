<?php include './inc/handle.php' ?>
<?php
    if (isset($_POST['nameLogin']) && isset($_POST['password'])) {
        $insert = $jsonUser->loginUser($_POST['nameLogin'],$_POST['password']);
        echo $insert;
    }  
?>