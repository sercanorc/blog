<?php
include "libraries/db.php";
    if ($_POST){
        $email=trim($_POST["email"]);
        if(!$email){
            echo "boş alan bırakmayınız";
        }else{
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo "eposta formatı yanlış";
            }else{
                $kontrol = $db->prepare("SELECT email FROM user WHERE  email=:e");
                $kontrol->execute([":e" =>$email]);
                if($kontrol->rowCount()){
                    $pass=trim($_POST["password"]);
                    $passwordkntrol=trim($_POST["passwordkntrol"]);
                    if(!$pass || !$passwordkntrol){
                        echo "boş alan bırakmayınız";
                    }else{ if ($passwordkntrol==$pass){
                        $sifre = $db->prepare("UPDATE user SET password=:p WHERE email=:e");
                        $sifre->execute([":p"=>md5($pass),":e"=>$email]);
                        if($sifre){
                            echo "başarıyla güncellendi";
                        }else{
                            echo "hatta olustu";
                        }

                    }
                    else {
                        echo "sifre eslesmiyor";
                    }
                    }

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
                }else{
                    echo "girilen eposta yok";
                }
            }
        }
    }
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<form action="" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email"  aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="sifre">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="passwordkntrol" id="exampleInputPassword1" placeholder="sifrekontrol">
    </div>
    <button type="submit" class="btn btn-primary">Sifremi sıfırla</button>
</form>
