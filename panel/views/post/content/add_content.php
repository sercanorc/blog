<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Yazılar
            <small>Blog yazılarınızı buradan girebilirsiniz..</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
            <li class="active">Yazılar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <section class="col-lg-12 ">

                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Yeni Blog Yazısı Ekle</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method="post" action="post.php?p=save" enctype="multipart/form-data">


                            <div class="row">
                                <!-- text input -->
                                <div class="form-group col-md-6">
                                    <label>Yazı Başlığı</label>
                                    <input type="text" class="form-control" name="title">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Kategori Adı</label>
                                    <select name="kategori_ıd" class="form-control">
                                        <?php foreach ($categories as $kategori) { ?>
                                            <option value="<?php echo $kategori->ıd; ?>"><?php echo $kategori->title; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Yazı İçeriği</label>
                                        <textarea name="acıklama" class="textarea" placeholder="Place some text here"
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>

                                </div>

                            </div>


                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label>Yazı Türü</label>
                                    <select name="post_type" id="post_type" class="form-control">
                                        <option value="1">Resim Yazısı</option>
                                        <option value="2">Video Yazısı</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row">


                                <div class="col-md-12 image-container">
                                    <div class="form-group">
                                        <label>Resim</label>
                                        <input type="file" name="ımg_url">
                                    </div>
                                </div>

                                <div class="form-group col-md-12 video-container hidden">
                                    <label>Video URL</label>
                                    <input type="text" class="form-control" name="video_url">
                                </div>

                            </div>


                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Aktif / Pasif</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_active" value="1" checked>
                                            Sitede gözüksün
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_active" value="0">
                                            Sitede gözükmesin
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Kaydet</button>
                            <a href="post.php" class="btn btn-danger">İptal</a>

                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>

            </section>
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
