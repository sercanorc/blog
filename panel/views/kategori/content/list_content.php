
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kategoriler
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">kategoriler</li>
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
                                <h3 class="box-title">Responsive Hover Table</h3>
                                <a href="kategori.php?p=add" class="btn btn-primary btn-sm pull-right">Ekle</a>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <thead>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">title</th>
                                        <th class="text-center">isactive</th>
                                        <th class="text-center">islemler</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($kategoriler as $kategori){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $kategori->ıd; ?></td>
                                            <td class="text-center"><?php echo $kategori->title; ?></td>
                                            <td class="text-center">
                                                <span class="label label-<?php echo ($kategori->is_active) ? "success" : "danger"; ?>">
                                                    <?php echo ($kategori->is_active) ? "Aktif" : "Pasif"; ?>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <a href="kategori.php?p=delete&ıd=<?php echo $kategori->ıd; ?>" class="btn btn-danger btn-sm">Sil</a>
                                                <!-- düzenleme işlemi -->
                                               </td>

                                        </tr>
                                    <?php }?>
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
