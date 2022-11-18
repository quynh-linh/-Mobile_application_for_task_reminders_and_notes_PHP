<?php include './inc/handle.php' ?>
<?php  
    if (isset($_POST['id'])) {
        $get = $jsonDinary->showJsonDinaryUpdate($_POST['id']);
        echo $get;
    } 
?>