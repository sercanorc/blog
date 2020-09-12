<?php
function get_all_posts(){
    include "libraries/db.php";
    return $db->query("SELECT * FROM post WHERE is_active=1 ORDER BY ıd DESC ")->fetchALL(PDO::FETCH_OBJ);
}
function kategori_baslik($id=-1){
    include "libraries/db.php";
    $title = $db->query("SELECT * FROM kategori WHERE ıd=$id ")->fetch(PDO::FETCH_OBJ);
    return $title->title;
}
function ayarlar(){
    include "libraries/db.php";
    return $db->query("SELECT * FROM ayarlar ")->fetch(PDO::FETCH_OBJ);

}
function kategoriler(){
    include "libraries/db.php";
    return $db->query("SELECT * FROM kategori WHERE is_active=1")->fetchALL(PDO::FETCH_OBJ);

}
function menü(){
    include "libraries/db.php";
    return $db->query("SELECT * FROM kategori WHERE is_active=1")->fetchALL(PDO::FETCH_OBJ);

}