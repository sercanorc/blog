<?php
include "models/postmodel.php";

function get_homepage(){

    $posts= get_all_posts();
    $ayar=ayarlar();
    $kategori=kategoriler();
    $menu_kategori=menü();

    include "views/index/homepage.php";

}
function kısalt($text,$boyut=200){
    if (strlen($text)>$boyut){
        return mb_substr($text,0,$boyut) . "...";
    }
    else{
        return $text;
    }
}
