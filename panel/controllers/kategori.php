<?php
include "models/kategori_model.php";

function get_add_page(){
    include "views/kategori/add.php";
}
function get_list_page(){

    $kategoriler=get_all_kategori();
    include "views/kategori/list.php";
}
function get_update_page(){
    $kategori = get_kategori();
    include "views/kategori/update.php";
}
function save(){

    insert_kategori();
}

function delete(){
    if(isset($_GET["ıd"])){
        delete_kategori();
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