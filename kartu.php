<?php
$model = new Kartu();
$data_kartu = $model->dataKartu();
?>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Kartu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Table Kartu
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>kode</th>
                                            <th>Nama</th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>kode</th>
                                            <th>Nama</th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($data_kartu as $kartu){

                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $kartu['kode'] ?></td>
                                            <td><?= $kartu['nama'] ?></td>
                                            <td><?= $kartu['diskon'] ?></td>
                                            <td><?= $kartu['iuran'] ?></td>
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