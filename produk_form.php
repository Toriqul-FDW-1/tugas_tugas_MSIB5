<?php
$obj_produk = new Produk();
$obj_jenisProduk = new Jenis_produk();

$data_produk = $obj_produk->dataProduk();
$data_jenis = $obj_jenisProduk->dataJenis();
?>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Input Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php?url=jenis_produk">Jenis Produk</a></li>
            <li class="breadcrumb-item active">Form Input Produk</li>
        </ol>
        <form action="produk_controller.php" method="POST">
            <div class="form-group">
                <label for="text1">Kode</label>
                <input id="text1" name="kode" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="text2">Nama</label>
                <input id="text2" name="nama" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="text3">Harga Beli</label>
                <input id="text3" name="harga_beli" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="text4">Harga Jual</label>
                <input id="text4" name="harga_jual" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="text5">Stok</label>
                <input id="text5" name="stok" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="text6">Minimal Stok</label>
                <input id="text6" name="min_stok" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="select">Jenis Produk</label>
                <div>
                    <select id="select" name="jenis_produk" class="custom-select">
                        <option value="rabbit">---Pilih Jenis Produk---</option>
                        <?php
                        foreach ($data_jenis as $jenis) {
                        ?>
                            <option value="<?= $jenis['id'] ?>"><?= $jenis['nama'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</main>