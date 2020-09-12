<?php
include "models/hakkımdamodel.php";

function get_hakkımdasayfası(){

    $ayar=ayarlar();
    $kategori=kategoriler();
    $menu_kategori=menü();

    include "views/hakkımda/hakkımdasayfası.php";

}
function kısalt($text,$boyut=200){
    if (strlen($text)>$boyut){
        return mb_substr($text,0,$boyut) . "...";
    }
    else{
        return $text;
    }
}
