<?php

require_once "controllers/homepage.php";

if(isset($_GET)){
    if(isset($_GET["p"])){
        switch ($_GET["p"]){
            default:
                get_homepage();
                break;
        }
    } else {
        get_homepage();
    }
}