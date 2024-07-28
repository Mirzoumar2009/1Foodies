
<?php


if (isset($_POST["save"])) {
    $title = $_POST["title"];
    $id = $_POST["id"];
    $text = $_POST["text"];
    $created_by = $_POST["created_by"];
   
    $created_at = $_POST["created_at"]; // Исправлено на получение "position"
    $targetDir = "../assets/images/posts/";
    $image = time().'.jpg'; 
    $targetFile = $targetDir . $image;
    $t = move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
    if ($t) {
        $img = "`image`='$image', ";
        
    }
    // Используйте подготовленные запросы для безопасности
    $sql = "UPDATE posts SET title='$title', `text`='$text', created_by='$created_by',  ".$img." created_at='$created_at' WHERE id='$id'";
   
   mysqli_query($conn, $sql);
    // Проверяем подготовленный запрос
     
}
?>
<script>
   window.location.href="index.php?page=33";  

</script>


