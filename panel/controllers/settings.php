<?php
include "models/settings_model.php";

function get_add_page(){
    include "views/settings/add.php";
}
function get_list_page(){

    $ayarlar=get_all_settins();
    include "views/settings/list.php";
}
function get_update_page(){
    $ayar = get_settins();
    include "views/settings/update.php";
}
function save(){


    $file = $_FILES["image"];

    if($file["name"] !== ""){

        $upload = move_uploaded_file($file["tmp_name"], "yüklemeler/" . $file["name"]);

        if($upload){
            insert_settings();
        }
           else {

            echo "Dosya yüklenirken bir hata oluştu...";

        }

    }


}

function delete(){
    if(isset($_GET["ıd"])){
        delete_settings();
    }
    else{
        echo "hata var";
    }
}

function update(){
        echo "güncelleme işlemi başarılı";

         //update_settings();


    }




?>