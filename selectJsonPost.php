<?php include './inc/handle.php' ?>
<?php  
    if (isset($_POST['nameLogin'])) {
        $get = $jsonDinary->showJsonDinary($_POST['nameLogin']);
        echo $get;
    } 
?>