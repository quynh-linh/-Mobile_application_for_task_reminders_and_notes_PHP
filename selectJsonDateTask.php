<?php include './inc/handle.php' ?>
<?php  
    if (isset($_POST['nameLogin']) || isset($_POST['date'])) {
        $get = $jsonTask->showJsonDateTask($_POST['nameLogin'],$_POST['date']);
        echo $get;
    } 
?>