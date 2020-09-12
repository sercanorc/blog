<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kullanıcılar
            <small>Kullanıcılarınızı Buradan Girebilirsiniz..</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
            <li class="active">Kullanıcılar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <section class="col-lg-12 ">

                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Kullanıcı Ekle</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method="post" action="user.php?p=save">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kullanıcı adı soyadı</label>
                                <input type="text" class="form-control" name="full_name">
                            </div>
                            <div class="form-group">
                                <label>e-posta</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>sifre</label>
                                <input type="password" class="form-control" name="password">
                            </div>


                            <button type="submit" class="btn btn-success">Kaydet</button>
                            <a href="user.php" class="btn btn-danger">İptal</a>

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
