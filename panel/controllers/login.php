<?php
session_start();

include "models/login_model.php";

function login(){
    if(isset($_SESSION["user"])){
        header("location:post.php");
    }else{
        include "views/login/login.php";
    }


}

function do_login(){
    $user = get_user();
    echo $_COOKIE["email"];
    if($user) {
        $_SESSION["user"]= $user;
        header("location:post.php");

    } else {

        echo "Kullanıcı Bulunamadı!!";

    }

}
function logout(){
    session_destroy();
    header("location:index.php");
}
