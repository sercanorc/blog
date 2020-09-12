<?php
require_once "controllers/iletisim.php";

if(isset($_GET)){
    if(isset($_GET["p"])){
        switch ($_GET["p"]){
            case "send":
                send_message();
                break;
            default:
                get_iletisim();
                break;
        }
    } else {
        get_iletisim();
    }
}