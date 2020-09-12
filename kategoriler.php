<?php

require_once "controllers/kategori.php";

if(isset($_GET)){
    if(isset($_GET["p"])){
        switch ($_GET["p"]){
            default:
                get_kategoripage();
                break;
        }
    } else {
        get_kategoripage();
    }
}