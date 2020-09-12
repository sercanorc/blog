<?php
include "models/kayıt_model.php";

function kayıt(){
    include "views/kayıt/kayıtsayfası.php";
}
function save(){


    $insert = insert_user();

    if($insert){

        header("Location:panel/index.php");



    } else {

        echo "Kaydetme işlemi Başarısızdır..";

    }


}