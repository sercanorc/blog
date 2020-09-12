<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <article class="content-item">
                    <div class="entry-media">
                        <div class="about-title">
                            <h2> <?php echo $ayar->ad; ?></h2>
                        </div>
                        <div class="bubble-line"></div>
                        <div class="post-content about">
                            <img src="panel/yüklemeler/<?php echo $ayar->image; ?>" alt="<?php echo $ayar->ad;?>">
                            <p>
                                <?php echo $ayar->hakkımda; ?>
                            </p>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-sm-4 sidebar">
                <?php include ("views/hakkımda/content/sagsidebar.php"); ?>
            </div>
        </div>
    </div>
</section>









