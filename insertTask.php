<?php include './inc/handle.php' ?>
<?php
    if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['content']) 
    && isset($_POST['time']) && isset($_POST['date']) && isset($_POST['user_id'])) {
        $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $userId = $_POST["user_id"];
        $insert = $jsonTask->insertTask($id,$title,$content,$date,$userId,$time);
        echo $insert;
    }  
?>