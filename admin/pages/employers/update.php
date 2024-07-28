<?php
print_r($_POST);

if (isset($_POST["save"])) {
    $name = $_POST["name"];
    $id = $_POST["id"];
    $surname = $_POST["surname"];
    
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $position = $_POST["position"]; // Исправлено на получение "position"

    $targetDir = "../assets/images/employer/";
    $image = time().'.jpg'; 
    $targetFile = $targetDir . $image;
    $t = move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
    if ($t) {
        $img = "`image`='$image', ";
        
    }
    // Используйте подготовленные запросы для безопасности
    $sql = "UPDATE employers SET `name`='$name', `surname`='$surname', birthday='$birthday',  ".$img." gender='$gender', position='$position' WHERE id='$id'";
   
   mysqli_query($conn, $sql);
    // Проверяем подготовленный запрос
     
}
?>
<script>
   window.location.href="index.php?page=3";  

</script>
