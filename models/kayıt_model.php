<?php
function insert_user(){


    include "libraries/db.php";

    $prepare = $db->prepare("INSERT INTO user SET 
      full_name = :full_name,
      email = :email,
      password = :password,
      isActive = :isActive,
      createdAt = :createdAt");

    return $prepare->execute(
        array(
            "full_name"          => $_POST["full_name"],
            "email"              => $_POST["email"],
            "password"           => md5($_POST["password"]),
            "isActive"           => $_POST["isActive"],
            "createdAt"          => date("Y-m-d H:i:s")
        )
    );

}