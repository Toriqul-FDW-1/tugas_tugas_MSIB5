<?php
// error_reporting(0);
$objJenis = new Jenis_produk();
$rs = $objJenis->dataJenis();
$idedit = $_REQUEST ['idedit'];
$objJenis = new Jenis_produk();
if (!empty($idedit)){
    $row = $objJenis->getJenis($idedit);

}else {
    $row = array();
}
?>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Input Jenis Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php?url=jenis_produk">Jenis Produk</a></li>
            <li class="breadcrumb-item active">Form Input Jenis Produk</li>
        </ol>
<form action="jenis_controller.php" method="POST">
    <div class="form-group">
        <label for="text" class="ms-3">Nama</label>
        <div class="col-8">
        <input id="text" name="nama" placeholder="Isi nama jenis produk" type="text" class="form-control" 
        value="<?= $row ['nama']?>">
        </div>
    </div>
    <div class="form-group">
        <?php
        if(empty($idedit)){ ?>
        <button name="proses" value="simpan" type="submit" class="btn btn-primary ms-3">Submit</button>
        <?php }else {?>
        <button type="submit" name="proses" value="ubah" class="btn btn-sm btn-warning ms-3">Submit</button>
        <?php } ?>
        <input type="hidden" name="idx" value="<?= $idedit ?>">
    </div>
</form>
        
    </div>
</main>

