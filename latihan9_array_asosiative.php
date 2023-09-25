<?php
//array scalar
$b1 = ['kode' => '001', 'buah' => 'Apel', 'harga' => 25000, 'jumlah' => 5];
$b2 = ['kode' => '002', 'buah' => 'Anggur', 'harga' => 45000, 'jumlah' => 6];
$b3 = ['kode' => '003', 'buah' => 'Belimbing', 'harga' => 15000, 'jumlah' => 7];
$b4 = ['kode' => '004', 'buah' => 'Bangkuang', 'harga' => 10000, 'jumlah' => 8];
$b5 = ['kode' => '005', 'buah' => 'Cerry', 'harga' => 35000, 'jumlah' => 9];
//array associative
$ar_buah = [$b1, $b2, $b3, $b4, $b5];

$ar_judul = ['No', 'Kode', 'Buah', 'Harga', 'Jumlah', 'Harga Kotor', 'Diskon', 'Harga bayar'];


$jumlah_transaksi = count($ar_buah);
$jumlah_harga = array_column($ar_buah, 'harga');
$harga_total = array_sum($jumlah_harga);
$harga_tertinggi = max($jumlah_harga);
$harga_terendah = min($jumlah_harga);
$harga_rata_rata = $harga_total / $jumlah_transaksi;

$keterangan = [
    'Harga Total' => $harga_total,
    'Harga Tertinggi' => $harga_tertinggi,
    'Harga Terendah' => $harga_terendah,
    'Harga Rata_Rata' => $harga_rata_rata,
    'Jumlah Buah' => $jumlah_transaksi,
]

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array assosiative</title>

    <style>
        tr {
            text-align: center;
        }

        
    </style>
</head>

<body>
    <h1 style="text-align: center;">Daftar Buah-Buahan</h1>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr bgcolor="salmon">
                <?php foreach ($ar_judul as $judul){
                ?>
                <th><?= $judul ?></th>

                <?php } ?>
            </tr>
        </thead>
        <tbody>
    
                <?php $no=1;
                foreach ($ar_buah as $buah){
                    $bruto = $buah ['harga'] * $buah ['jumlah'];
                    $diskon = ($buah ['buah'] == 'Apel' && $buah ['jumlah'] >= 4) ? 0.2 : 0.1;
                    $harga_diskon = $diskon * $bruto;
                    $harga_bayar = $bruto - $harga_diskon;

                    $warna = $no % 2 == 1 ? 'khaki' : 'beige';

                ?>
            <tr bgcolor="<?= $warna; ?>">
                <td><?= $no++ ?></td>
                <td><?= $buah ['kode'] ?></td>
                <td><?= $buah ['buah'] ?></td>
                <td><?= $buah ['harga'] ?></td>
                <td><?= $buah ['jumlah'] ?></td>
                <td><?= $bruto ?></td>
                <td><?= $harga_diskon ?></td>
                <td align="center"> RP. <?= number_format( $harga_bayar,0,',','.') ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php 
                foreach ($keterangan as $ket => $hasil){         
            ?>
            <tr bgcolor="gray">
                <td colspan="3"><?= $ket?></td>
                <td colspan="5"><?= $hasil?></td>
            </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>

</html>