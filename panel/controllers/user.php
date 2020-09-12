<?php

// SQL İşlemlerinin yapıldığı Model dosyasının yüklenmesi
include "models/user_model.php";

function get_add_page(){
    include "views/user/add.php";
}
function get_list_page(){

    $users = get_all_users();

    include "views/user/list.php";
}
function get_update_page(){

    $user = get_user();

    include "views/user/update.php";
}


function save(){


    $insert = insert_user();

    if($insert){

        header("Location:index.php");
        session_start();
        if(!isset($_SESSION["user"])){
            header("location:index.php");
        }

    } else {

        echo "Kaydetme işlemi Başarısızdır..";

    }


}
function update(){

    $update = update_user();

    if($update) {

        header("Location:user.php");

    } else {

        echo "Update İşlemi Başarısızdır..";
    }

}
function delete(){

    if(isset($_GET["id"])){

        delete_user();
        header("Location:user.php");

    }

}