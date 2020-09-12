<?php

require_once "controllers/hakkımda.php";

if(isset($_GET)){
    if(isset($_GET["p"])){
        switch ($_GET["p"]){
            default:
                get_hakkımdasayfası();
                break;
        }
    } else {
        get_hakkımdasayfası();
    }
}