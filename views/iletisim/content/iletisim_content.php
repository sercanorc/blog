<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <article class="contact-media">
                    <h2 class="contact-media-title">Contact</h2>
                    <div class="bubble-line"></div>
                    <div class="contact-content">
                        <img src="panel/yüklemeler/<?php echo $ayar->image; ?>" alt="<?php echo $ayar->ad;?>">
                        <h3>
                            İLETİŞİM FORMU
                        </h3>
                        <p> Size geri dönüş yapabilmem için lütfen e-posta adresinizi doğru girdiğinizden emin olun. Eğer e-posta gönderirken sorun yaşarsanız, sercanorc@gmail.com adresine mail gönderebilirsiniz.
                        </p>
                        <hr>
                        <div class="contact-row">
                            <form method="post" action="iletisim.php?p=send">
                                <div class="contact-form">
                                    <p>  NAME (required)	</p>
                                    <input type="text" name="name" placeholder="">
                                    <p> E-MAIL(required) </p>
                                    <input type="text" name="email" placeholder="">
                                    <p>SUBJECT</p>
                                    <input type="text" name="subject" placeholder="">
                                    <p> MESSAGE</p>
                                    <textarea name="message" placeholder=""></textarea>
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" class="button">Send message </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>

            </div>

            <div class="col-sm-4 sidebar">
                <?php include ("views/iletisim/content/sagsidebar.php"); ?>
            </div>
        </div>
    </div>
</section>









