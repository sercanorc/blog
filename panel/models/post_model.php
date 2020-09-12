<?php


function get_post(){
    if(isset($_GET["ıd"])){
        $ıd =$_GET["ıd"];
        include "libraries/db.php";
        return $db->query("SELECT * FROM post WHERE ıd=$ıd")->fetch(PDO::FETCH_OBJ);

    }

}

function get_all_posts(){
    include "libraries/db.php";
    return $db->query("SELECT * FROM post")->fetchALL(PDO::FETCH_OBJ);


}

function get_kategori($ıd){
    include "libraries/db.php";
    return $db->query("SELECT * FROM kategori WHERE ıd=$ıd")->fetch(PDO::FETCH_OBJ);
}
function get_kategorii(){
    include "libraries/db.php";
    return $db->query("SELECT * FROM kategori WHERE is_active=1")->fetchAll(PDO::FETCH_OBJ);
}
function insert_post(){


    include "libraries/db.php";
    $title= $_POST["title"];
    $acıklama = $_POST["acıklama"];
    $post_type = $_POST["post_type"];
   // $img_url = $_POST["ımg_url"];
    $video_url = $_POST["video_url"];
    $kategori_ıd = $_POST["kategori_ıd"];
    $is_active = $_POST["is_active"];

    $sorgu = $db->prepare("INSERT INTO post SET 
      title = ?,
      acıklama = ?,
      post_type = ?,
      video_url = ?,
      kategori_ıd = ?,
      is_active = ?");
    $ekle = $sorgu->execute([
        $title,$acıklama,$post_type,$video_url,$kategori_ıd,$is_active]);
    if($ekle){
        header('location:post.php');
    }
    else{
        $hata = $sorgu->errorInfo();
        echo 'MySql hatasi: '. $hata[2];
    }
}
function delete_post(){
    include "libraries/db.php";
    $sil =$db->prepare("DELETE FROM post WHERE ıd=?");
    $sil->execute(["ıd" => $_GET["ıd"]]);
    if($sil){
        header('location:post.php');
    }
    else
    {
        echo "hata var";
    }

    if(!isset($_GET['ıd']) || empty($_GET['ıd'])){
        header('Location:post.php');
        exit;
    }

    $sorgu = $db->prepare('DELETE FROM post WHERE ıd = ?');
    $sorgu->execute([$_GET['ıd']]);
    header('location:post.php');


}

