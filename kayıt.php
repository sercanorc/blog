<?php
require_once "controllers/kayıt.php";

if(isset($_GET)){
    if(isset($_GET["p"])){
        switch ($_GET["p"]){
            case "save":
                save();
                break;
            default:
                kayıt();
                break;
        }
    } else {
        kayıt();
    }
}