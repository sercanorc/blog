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

                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Profil Bilgisini Düzenle  </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method="post" action="settings.php?p=update&id=<?php echo $ayar->ıd; ?>" enctype="multipart/form-data">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Blogger Adı</label>
                                <input type="text" class="form-control" name="ad" value="<?php echo $ayar->ad; ?>">
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

                            <button href="post.php" type="submit" class="btn btn-success">Kaydet</button>
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
