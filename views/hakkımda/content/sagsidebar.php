<div class="widget">
                    <h3 class="widget-title">Hakkımda</h3>
                    <div class="bubble-line"></div>

                    <div class="widget-content">
                        <img src="panel/yüklemeler/<?php echo $ayar->image; ?>" alt="<?php echo $ayar->ad;?>">
                        <p><?php echo kısalt($ayar->hakkımda,250);?></p>
                        <div class="widget-more">
                            <a href="hakkımda.php" class="button">Devamını gör</a>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <h3 class="widget-title"> Kategoriler</h3>
                    <div class="bubble-line"></div>
                    <div class="widget-content">
                        <ul>
                            <?php foreach ($kategori as $kategoriler) {?>
                            <li>
                                <a href="javascript:;"><?php echo $kategoriler->title; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
