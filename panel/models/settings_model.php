<?php


function get_settins(){
    if(isset($_GET["ıd"])){
        $ıd =$_GET["ıd"];
        include "libraries/db.php";
        return $db->query("SELECT * FROM ayarlar WHERE ıd=$ıd")->fetch(PDO::FETCH_OBJ);

    }

}

function get_all_settins(){
    include "libraries/db.php";
    return $db->query("SELECT * FROM ayarlar")->fetchALL(PDO::FETCH_OBJ);


}
function insert_settings(){


    include "libraries/db.php";
    $ad= $_POST["ad"];
    $hakkımda = $_POST["hakkımda"];
    $email = $_POST["email"];
    $instagram = $_POST["instagram"];
    $linkedin = $_POST["linkedin"];
    $github = $_POST["github"];

    $sorgu = $db->prepare("INSERT INTO ayarlar SET 
      ad = ?,
      hakkımda = ?,
      email = ?,
      instagram = ?,
      linkedin = ?,
      github = ?");
    $ekle = $sorgu->execute([
        $ad,$hakkımda,$email,$instagram,$linkedin,$github]);
    if($ekle){
        header('location:settings.php');
    }
    else{
        $hata = $sorgu->errorInfo();
        echo 'MySql hatasi: '. $hata[2];
    }
}
function delete_settings(){
    include "libraries/db.php";
    $sil =$db->prepare("DELETE FROM ayarlar WHERE ıd=?");
    $sil->execute(["ıd" => $_GET["ıd"]]);
    if($sil){
        header('location:settings.php');
    }
    else
    {
        echo "hata var";
    }

    if(!isset($_GET['ıd']) || empty($_GET['ıd'])){
        header('Location:index.php');
        exit;
    }

    $sorgu = $db->prepare('DELETE FROM ayarlar WHERE ıd = ?');
    $sorgu->execute([$_GET['ıd']]);
    header('location:settings.php');


}

