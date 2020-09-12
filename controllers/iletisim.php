<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include "models/iletisim.php";


function get_iletisim(){

    $posts= get_all_posts();
    $ayar=ayarlar();
    $kategori=kategoriler();
    $menu_kategori=menü();

    include "views/iletisim/iletisimsayfası.php";

}
function kısalt($text,$boyut=200){
    if (strlen($text)>$boyut){
        return mb_substr($text,0,$boyut) . "...";
    }
    else{
        return $text;
    }
}
function send_message(){
    include "libraries/db.php";
    if(isset($_POST["email"])){
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $sorgu = $db->prepare("INSERT INTO iletisim SET
      email = ?,
      konu = ?,
      mesaj = ?");
        $ekle = $sorgu->execute([
            $email,$subject,$message]);
        if($ekle){
            include "vendor/autoload.php";

            $mail = new PHPMailer(true);

            try{

                // Server Ayarları...
//            $mail->SMTPDebug = 1;
                $mail->SMTPDebug = 2;

                $mail->Host = "ssl://smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->Username = "sercanblog465@gmail.com";
                $mail->Password = "sblog465";
                $mail->SMTPSecure = "tls";
                $mail->Port = 465;
                $mail->isSMTP();

                // Alıcılar Ayaları
                $mail->setFrom("sercanblog465@gmail.com", "Blog");
                $mail->addAddress("m.sercanoruc@gmail.com", "Sercan Oruc");

//            Ek ayarları
//            $mail->addAttachment();

                // Gonderi Ayarlari
                $mail->isHTML();
                $mail->Subject = $_POST["subject"];
                $mail->Body = $_POST["message"];

                if($mail->send()){

//                echo "Mail Gönderimi Başarılı...";
                    header("location:index.php");

                } else {

//                echo "Mail Gönderimi Başarısız...";
                    header("location:iletsim.php");


                }

            } catch(Exception $e){
                echo "Mesaj Gönderilemedi!!!";
                echo "Mail Hatası : " . $mail->ErrorInfo;
                header("location:index.php");
            }

        }
        else{
            $hata = $sorgu->errorInfo();
            echo 'MySql hatasi: '. $hata[2];
        }

    } else {
        header("location:iletisim.php");
    }

}

