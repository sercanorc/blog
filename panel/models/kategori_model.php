<?php


function get_kategori(){
    if(isset($_GET["ıd"])){
        $ıd =$_GET["ıd"];
        include "libraries/db.php";
        return $db->query("SELECT * FROM kategori WHERE ıd=$ıd")->fetch(PDO::FETCH_OBJ);

    }

}

function get_all_kategori(){
    include "libraries/db.php";
    return $db->query("SELECT * FROM kategori")->fetchALL(PDO::FETCH_OBJ);


}
function insert_kategori(){

    include "libraries/db.php";
    $title= $_POST["title"];
    $is_active = $_POST["is_active"];

    $sorgu = $db->prepare("INSERT INTO kategori SET 
      title = ?,
      is_active = ?");
    $ekle = $sorgu->execute([
        $title,$is_active]);
    if($ekle){
        header('location:kategori.php');
    }
    else{
        $hata = $sorgu->errorInfo();
        echo 'MySql hatasi: '. $hata[2];
    }
}
function delete_kategori(){
    include "libraries/db.php";

    if(!isset($_GET['ıd']) || empty($_GET['ıd'])){
        header('Location:kategori.php');
        exit;
    }
    $sorgu = $db->prepare('DELETE FROM kategori WHERE ıd = ?');
    $sorgu->execute([$_GET['ıd']]);
    if($sorgu){
        header('location:kategori.php');
    }
    else
    {
        echo "hata var";
    }




}

