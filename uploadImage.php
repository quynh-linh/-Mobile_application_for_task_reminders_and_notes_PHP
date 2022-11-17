<?php 
    $file_path = "image/";
    $file_path = $file_path.basename($_FILES['upload_file']['name']);
    if (move_uploaded_file($_FILES['upload_file']['tmp_name'],$file_path)) {
        $tem = $_FILES['upload_file']['name'];
        echo $tem ;
    }else {
        echo "Error";
    }
?>