<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "menu_sidebar.php"; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "menu_topbar.php"; ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Judul Artikel</th>
                                            <th>Deskripsi Artikel</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Link Artikel</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "config.php";
                                        $no = 0;
                                        $data = mysqli_query($conn, "SELECT * from tb_artikel");
                                        while ($d = mysqli_fetch_array($data)) {
                                            $no++;
                                        ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $d['title']; ?> </a> </b></td>
                                                <td><?php echo $d['deskripsi']; ?></td>
                                                <td><img src='<?php echo $d['image']; ?> ' width='50px'></td>
                                                <td><?php echo $d['date']; ?></td>
                                                <td><?php echo $d['link']; ?></td>
                                                <td>
                                                    <a href="artikel-edit.php?id=<?php echo $d['id']; ?> " class="btn-sm btn-primary"><span class="fas fa-edit"></a>
                                                    <a href="artikel-hapus.php?id=<?php echo $d['id']; ?>" class="btn-sm btn-danger"><span class="fas fa-trash"></a>
                                                </td>
                                            </tr>
                            </div>
                        <?php
                                        }
                        ?>
                            </div>
                        
                        </tbody>
                        </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </div>
    <!-- End of Page Wrapper -->