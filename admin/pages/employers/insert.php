<?php
if (isset($_POST["save"]))
{
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $birthday = $_POST["birthday"];
    $position = $_POST["position"];
    
    $gender = $_POST["gender"];
    require_once("../config.php");

    // начало 
    $targetDir = "../assets/images/employer/";
    $image = time().'.jpg'; 
    $targetFile = $targetDir . $image;
    // Перемещение файла в целевую директорию
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
    // конец 
    
    $sql = "insert into employers(name, surname, image, birthday, position, gender)  values('$name','$surname','$image', '$birthday', '$position', '$gender'); ";
    
    mysqli_query($conn, $sql);
    ?>
    <script>
        window.location.href="index.php?page=3";
    </script>
    <?
}
?>