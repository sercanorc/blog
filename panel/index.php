<?php

require_once "controllers/login.php";

if(isset($_GET)){
    if(isset($_GET["p"])){

        switch ($_GET["p"]){
            case "do_login":
                do_login();
                break;
            case "logout":
                logout();
                breaak;
            default:
                login();
                break;
        }

    } else {
        login();
    }
}
?>