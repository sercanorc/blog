<?php
include "models/post_model.php";

function get_add_page(){
    $categories = get_kategorii();
    include "views/post/add.php";
}
function get_list_page(){

    $posts=get_all_posts();
    include "views/post/list.php";
}
function get_update_page(){
    $posts = get_post();
    include "views/post/update.php";
}
function save(){

    $post_type = $_POST["post_type"];
    if($post_type == 1){
        $file = $_FILES["ımg_url"];

        if($file["name"] !== ""){

            $upload = move_uploaded_file($file["tmp_name"], "yüklemeler/" . $file["name"]);

            if($upload){
                insert_post($file["name"]);
            }
            else {

                echo "Dosya yüklenirken bir hata oluştu...";

            }

        }

    }elseif ($post_type == 2){
        insert_post();
    }
    else{
        echo "hata var";
    }




}

function delete(){
    print_r($_GET["ıd"]);
    if(isset($_GET["ıd"])){
        delete_post();
    }
    else{
        echo "hata var";
    }
}
function get_kategori_title($ıd){

    $category = get_kategori($ıd);
    return $category->title;
}

function update(){
        echo "güncelleme işlemi başarılı";

         //update_settings();


    }




?>