<header id="header">
    <div class="logo" data-bg-image="assets/images/bg-header.jpg">
        <h1>
            <a href="index.php">Blog</a>
        </h1>
        <p> A problem is a chance for you to do your best.</p>
    </div>
    <div class="menu-container">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <nav class="main-nav">
                        <ul>
                            <li class=" current-menu-item menu-item-has-children">
                                <a href="index.php">Anasayfa</a>
                            </li>
                            <?php foreach ($menu_kategori as $kate) {?>
                            <li><a href="kategoriler.php?ıd=<?php echo $kate->ıd; ?>"><?php echo $kate->title; ?></a></li>
                            <?php } ?>
                            <li><a href="hakkımda.php">Hakkımda</a></li>
                            <li><a href="iletisim.php">Contact</a></li>
                            <li><a href="kayıt.php">Kayıt ol</a></li>
                        </ul>
                        <a href="javascript:;" id="close-menu"> <i class="fa fa-close"></i></a>
                    </nav>
                </div>
                <div class=" col-md-5 h-search">
                    <form class="search_form" method="post" action="arama.php">
                        <input type="text" name="kelime" placeholder="Search and hit enter...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <div class="head-social">
                        <a class="socials" href="https://www.instagram.com/sercanorc/"><i class="fa fa-instagram"></i></a>
                        <a class="socials" href="https://twitter.com/KOUBJK1903?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter"></i></a>
                        <a class="socials" href="https://www.linkedin.com/in/sercanorucc/"><i class="fa fa-linkedin"></i></a>
                        <a class="socials" href="https://github.com/sercanorc"><i class="fa fa-github"></i></a>
                        <a class="socials" href="mailto:<?php echo $ayarlar->email; ?>"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>