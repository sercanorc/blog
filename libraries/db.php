<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=proje', 'root', 'root');

}catch (PDOException $error) {
    echo $error->getMessage();
    die();
}
?>