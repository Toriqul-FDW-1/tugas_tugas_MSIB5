<?php
include_once 'top.php';
include_once 'menu.php';
$model = new Produk();
$data_produk = $model->dataProduk();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis Produk</th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis Produk</th>
                                        
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach ($data_produk as $row){

                                        
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row['kode'] ?></td>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['harga_beli'] ?></td>
                                            <td><?= $row['harga_jual'] ?></td>
                                            <td><?= $row['stok'] ?></td>
                                            <td><?= $row['min_stok'] ?></td>
                                            <td><?= $row['jenis_produk_id'] ?></td>
                                            
                                        </tr>
                                        <?php
                                        }
                                        ?>
                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>