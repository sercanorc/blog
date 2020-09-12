<?php

session_start();
if(!isset($_SESSION["user"])){
    header("location:index.php");
}

require_once  "controllers/blank.php";

if(isset($_GET)){
    if(isset($_GET["p"])){
        switch ($_GET["p"]){
            case "list":
                get_list_page();
                break;
            case "add":
                get_add_page();
                break;
            case "update":
                get_update_page();
                break;
            default:
                get_list_page();
                break;
        }
    }

    else{
        get_list_page();
    }
}

?>