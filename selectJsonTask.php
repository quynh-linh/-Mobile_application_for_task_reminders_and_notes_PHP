<?php include './inc/handle.php' ?>
<?php  
    if (isset($_POST['nameLogin'])) {
        $get = $jsonTask->showJsonTask($_POST['nameLogin']);
        echo $get;
    } 
?>