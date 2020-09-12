<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8">

                <?php foreach ($posts as $post) { ?>

                    <article class="content-item">
                        <div class="entry-media">
                            <div class="post-title">
                                <h2><a href="#"><?php echo $post->title; ?></a></h2>
                                <div class="entry-date">
                                    <ul>
                                        <li>
                                            <a href='#'><?php echo kategori_baslik($post->kategori_ıd) ;  ?></a>
                                        </li>
                                        <li><?php echo $post->createdAt; ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bubble-line"></div>
                            <div class="post-content">

                                <?php if($post->post_type == 1) { ?>
                                    <img src="<?php echo $post->ımg_url; ?>" alt="<?php echo $post->title; ?>">
                                <?php } else if($post->post_type == 2) { ?>

                                    <iframe src="<?php echo $post->video_url; ?>"
                                            width="100%" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen
                                            allowfullscreen>
                                    </iframe>

                                <?php } ?>
                                <p>
                                    <?php echo $post->acıklama; ?>
                                </p>
                            </div>
                            <div class="bubble-line"></div>
                            <div class="post-footer">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <a href="post.php?ıd=<?php echo $post->ıd; ?>" class="button">Devamını Oku</a>
                                    </div>
                                    <div class="col-sm-7 text-right">
                                        <div class="content-social">
                                            <a href="javascript:;"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                            <a href="javascript:;"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                            <a href="javascript:;"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                <?php } ?>


            </div>

            <div class="col-sm-4 sidebar">
                <?php include ("views/index/content/sagsidebar.php"); ?>
            </div>
        </div>
    </div>
</section>