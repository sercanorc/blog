<?php
function get_all_posts($ıd){
    include "libraries/db.php";
    $prepare = $db->prepare ("SELECT * FROM post WHERE is_active=1 AND kategori_ıd =? ORDER BY ıd DESC ");
    $prepare->execute(
        array($ıd)
    );
    return $prepare->fetchALL(PDO::FETCH_OBJ);
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