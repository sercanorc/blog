<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ayarlar
            <small>Control Panels</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
            <li class="active">Ayarlar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <section class="col-lg-12 ">

                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">General Elements</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method="post"  action="kategori.php?p=save">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kategori Adı</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_active" id="optionsRadios1" value="1" checked>
                                            Aktif
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_active" id="optionsRadios2" value="0">
                                            Pasif
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Kaydet</button>
                            <a href="kategori.php" class="btn btn-danger">İptal</a>

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
