<?php include './inc/handle.php' ?>
<?php
    if (isset($_POST['id'])) {
        $id = $_POST["id"];
        $insert = $jsonTask->deleteUser($id);
        echo $insert;
    }  
?>