<?php
include "models/postlar.php";

function get_postsayfası(){

    if(isset($_GET["ıd"])){
        $post=get_post($_GET["ıd"]);
        $ayar=ayarlar();
        $kategori=kategoriler();
        $menu_kategori=menü();
        include "views/post/postsayfası.php";
    }
    else{
        header("locatin:index.php");
    }


}
function kısalt($text,$boyut=200){
    if (strlen($text)>$boyut){
        return mb_substr($text,0,$boyut) . "...";
    }
    else{
        return $text;
    }
}
