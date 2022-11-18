<?php include './inc/handle.php' ?>
<?php
    if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['date']) 
    && isset($_POST['image']) && isset($_POST['user_id']) && isset($_POST['find_id'])) {
        $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $date = $_POST["date"];
        $image = $_POST["image"];
        $user_id = $_POST["user_id"];
        $find_id = $_POST["find_id"];
        $insert = $jsonDinary->UpdateDinary($id,$title,$content,$date,$image,$user_id,$find_id);
        echo $insert;
    }  
?>