<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kategoriler
            <small>Kategori düzenle </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
            <li class="active">Kategoriler</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <section class="col-lg-12 ">

                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Kategori Bilgisini Düzenle  </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method="post" action="kategori.php?p=update&id=<?php echo $kategori->ıd; ?>" enctype="multipart/form-data">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Blogger Adı</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $ayar->ad; ?>">
                            </div>

                            <div class="row">
                                <div class="col-xs-3 form-group">
                                    <label for="">E-posta</label>
                                    <input name="email" type="text" class="form-control" value="<?php echo $ayar->email; ?>">
                                </div>
                            </div>


                                <div class="row">
                                    <div class="col-xs-3 form-group">
                                        <label>Instagram</label>
                                        <input name="instagram" type="text" class="form-control" value="<?php echo $ayar->instagram; ?>">
                                    </div>
                                    <div class="col-xs-3 form-group">
                                        <label>Linkedin</label>
                                        <input name="linkedin" type="text" class="form-control" value="<?php echo $ayar->linkedin; ?>">
                                    </div>
                                    <div class="col-xs-3 form-group">
                                        <label>github</label>
                                        <input name="github" type="text" class="form-control" value="<?php echo $ayar->github; ?>">
                                    </div>
                                </div>


                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Hakkımda</label>
                                        <textarea name="about_me" class="textarea" placeholder="Place some text here"
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $ayar->hakkımda; ?></textarea>
                                    </div>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Kaydet</button>
                            <a href="settings.php" class="btn btn-danger">İptal</a>

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
