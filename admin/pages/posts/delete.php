<?php

if (isset($_GET["id"]))
{
     $id = $_GET["id"];
    
    $sql = "Delete from posts where id=$id";
    
    mysqli_query($conn, $sql);
    ?>
        <script>
        window.location.href="index.php?page=33";
    </script>
    <?

}

?>