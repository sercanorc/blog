
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Yazılar
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Yazılar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <section class="col-lg-12 ">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Blog yazılarınız</h3>
                                <a href="post.php?p=add" class="btn btn-primary btn-sm pull-right">Ekle</a>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <thead>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Başlık</th>
                                    <th class="text-center">Blog Yazısı</th>
                                    <th class="text-center">Yazı Türü</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Görsel</th>
                                    <th class="text-center">Görüntülenme</th>
                                    <th class="text-center">isActive</th>
                                    <th class="text-center">İşlemler</th>
                                    </thead>

                                    <tbody>

                                    <?php foreach ($posts as $post) { ?>

                                        <tr>
                                            <td class="text-center"><?php echo $post->ıd; ?></td>
                                            <td class="text-center"><?php echo $post->title; ?></td>
                                            <td class="text-center"><?php echo $post->acıklama; ?></td>

                                            <td class="text-center"><?php echo ($post->post_type == 1) ? "Resim" : "Video"; ?></td>
                                            <td class="text-center">
                                                <?php echo get_kategori_title($post->kategori_ıd); ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if($post->post_type == 1) { ?>
                                                    <img src="<?php echo $post->ımg_url; ?>" alt="<?php echo $post->title; ?>" width="200">
                                                <?php } else if($post->post_type == 2) {?>
                                                    <iframe width="200"  src="<?php echo $post->video_url; ?>" frameborder="0" allowfullscreen></iframe>
                                                <?php } ?>

                                            </td>
                                            <td class="text-center"><?php echo $post->display_count; ?></td>
                                            <td class="text-center">
                                                    <span class="label label-<?php echo ($post->is_active) ? "success" : "danger"; ?>">
                                                        <?php echo ($post->is_active) ? "Aktif" : "Pasif"; ?>
                                                    </span>
                                            </td>
                                            <td class="text-center" width="150">
                                                <a href="post.php?p=delete&ıd=<?php echo $post->ıd;?>" class="btn btn-danger btn-sm">Sil</a>
                                                <a href="post.php?p=updatePage&ıd=<?php echo $post->ıd;?>" class="btn btn-warning btn-sm">Düzenle</a>
                                            </td>
                                        </tr>


                                    <?php } ?>


                                    </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
