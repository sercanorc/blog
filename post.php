<?php

require_once "controllers/post.php";

if(isset($_GET)){
    if(isset($_GET["p"])){
        switch ($_GET["p"]){
            default:
                get_postsayfası();
                break;
        }
    } else {
        get_postsayfası();
    }
}