<?php
if (isset($_GET["page"]) && !empty(trim($_GET["page"]))) {
    require_once("../config.php");
    $page = $_GET["page"];
    if ($page == "1") {
    require_once ('pages/employers/add.php');
    }
     else if ($page == "2") {
        require_once ('pages/employers/insert.php');
    }
    else if ($page == "3") {
        require_once ('pages/employers/list.php');
    }
    else if ($page == "4") {
        require_once ('pages/employers/edit.php');
    }
    else if ($page == "5") {
        require_once ('pages/employers/update.php');
    }
    else if ($page == "6") {
        require_once ('pages/employers/delete.php');
    }
    if ($page == "11") {
        require_once ('pages/posts/add.php');
        }
         else if ($page == "22") {
            require_once ('pages/posts/insert.php');
        }
        else if ($page == "33") {
            require_once ('pages/posts/list.php');
        }
        else if ($page == "44") {
            require_once ('pages/posts/edit.php');
        }
        else if ($page == "55") {
            require_once ('pages/posts/update.php');
        }
        else if ($page == "66") {
            require_once ('pages/posts/delete.php');
        }


}

?>