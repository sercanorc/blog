
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ayarlar
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Ayarlar</li>
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
                                <a href="settings.php?p=add" class="btn btn-primary btn-sm pull-right">Ekle</a>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <thead>
                                        <th class="text-center">Profil fotografı</th>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">ad</th>
                                        <th class="text-center">hakkımda</th>
                                        <th class="text-center">email</th>
                                        <th class="text-center">is_active</th>
                                        <th class="text-center">islemler</th>

                                    </thead>
                                    <tbody>
                                    <?php foreach ($ayarlar as $ayar){ ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php if($ayar->image != "" && $ayar->image != "#"){ ?>

                                                    <img width="90" src="yüklemeler/<?php echo $ayar->image; ?>" alt="hatalı">

                                                <?php } ?>
                                            </td>
                                            <td class="text-center"><?php echo $ayar->ıd; ?></td>
                                            <td class="text-center"><?php echo $ayar->ad; ?></td>
                                            <td class="text-center"><?php echo $ayar->hakkımda; ?></td>
                                            <td class="text-center"><?php echo $ayar->email; ?></td>
                                            <td class="text-center">
                                                <span class="label label-<?php echo ($ayar->is_active) ? "success" : "danger"; ?>">
                                                    <?php echo ($ayar->is_active) ? "Aktif" : "Pasif"; ?>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <a href="settings.php?p=delete&ıd=<?php echo $ayar->ıd; ?>" class="btn btn-danger btn-sm">Sil</a>
                                                <a href="settings.php?p=updatePage&ıd=<?php echo $ayar->ıd; ?>" class="btn btn-warning btn-sm">Düzenle</a>
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
