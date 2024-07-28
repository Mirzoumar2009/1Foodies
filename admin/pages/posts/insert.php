<?php
if (isset($_POST["save"]))
{
    $title = $_POST["title"];
    $text = $_POST["text"];
    $created_by = $_POST["created_by"];
    $created_at= $_POST["created_at"];
    
    require_once("../config.php");

    // начало 
    $targetDir = "../assets/images/posts/";
    $image = time().'.jpg'; 
    $targetFile = $targetDir . $image;
    // Перемещение файла в целевую директорию
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
    // конец 
    
    $sql = "insert into posts(title, text, created_by, image, created_at)  values('$title','$text','$created_by', '$image', '$created_at'); ";
 
    
    mysqli_query($conn, $sql);
    ?>
    <script>
        window.location.href="index.php?page=33";
    </script>
    <?
}
?>