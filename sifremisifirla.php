<?php
include "libraries/db.php";
if ($_POST){
    $pass=trim($_POST["password"]);
    $passwordkntrol=trim($_POST["passwordkntrol"]);
    if(!$passwordkntrol){
        echo "boş alan bırakmayınız";
    }else{/*
            $yenisifre = $db->prepare("UPDATE email FROM user WHERE  email=:e");
            $yenisifre->execute([":e" =>$passwordkntrol]);
            if($yenisifre->rowCount()){*/
                echo $passwordkntrol;
              //  header("Location:/proje/blog/login.php");
                /*$sifirlamakodu=$email;
                $sifirlamalinki = "http://localhost/proje/blog/sifremisifirla.php?kod=".$sifirlamakodu;
                */
                /* $sifirlamakodu= uniqid("sercanorc");
                $mail = new \PHPMailer\PHPMailer\PHPMailer();
                 $mail->Host = "ssl://smtp.gmail.com";
                 $mail->SMTPAuth = true;
                 $mail->Username = "sercanblog465@gmail.com";
                 $mail->Password = "sblog465";
                 $mail->SMTPSecure = "tls";
                 $mail->Port = 465;
                 $mail->isSMTP();

                 $mail->setFrom("sercanblog465@gmail.com", "Blog");
                 $mail->addAddress("m.sercanoruc@gmail.com", "Sercan Oruc");

                 $mailicerik = "Sıfırlama linki ". $sifirlamalinki
                $mail->MsgHTML($mailicerik);
                if($mail->Send()){
                echo "sifre gönderildi";
                }
                else{
                echo "hata olustu";
                }

                */
            }
        }


?>

<form action="" method="post">
    Yeni sifrenizi giriniz
    <input type="password" name="password" placeholder="sifre"> <br>
    Sifrenizi tekrar giriniz
    <input type="password" name="passwordkntrol" placeholder="sifrekntrol"> <br>
    <button type="submit">Sifremi sıfırla</button>
</form>

