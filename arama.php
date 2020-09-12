<?php
include "libraries/db.php";
    if(!$_POST["kelime"]){
        echo "arama yapabilmek için doldurun";
    }else{
        $kelime=$_POST["kelime"];
        $sorgu=$db->prepare("SELECT * FROM post WHERE title LIKE :title");
        $sorgu->execute(array(":title" =>"%".$kelime."%"));
        if ($sorgu->rowCount()){
            echo $kelime." kelimesine ait(".$sorgu->rowCount().") adet sonuç bulundu";
            foreach ($sorgu as $row){

                echo "<br>";
                echo $row["acıklama"];
            }
        }
        else{
            echo "aranan kelime yok";
        }
    }
