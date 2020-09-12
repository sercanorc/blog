<?php
include "models/kategorimodel.php";

function get_kategoripage(){
    if(isset($_GET["ıd"])){
        $posts= get_all_posts($_GET["ıd"]);
        $ayar=ayarlar();
        $kategori=kategoriler();
        $menu_kategori=menü();

        include "views/kategoriler/kategori.php";
    }else{
        header("location:index.php");
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
