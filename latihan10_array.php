<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP</title>
</head>
<style>
    tr {
        text-align: center;
        
    }
</style>

<body>

    <?php
    $sm1 = ['nim' => '2001010034', 'nama' => 'Andi', 'nilai' => 95];
    $sm2 = ['nim' => '2001010035', 'nama' => 'Ani', 'nilai' => 90];
    $sm3 = ['nim' => '2001010036', 'nama' => 'Abdi', 'nilai' => 85];
    $sm4 = ['nim' => '2001010037', 'nama' => 'Anggun', 'nilai' => 70];
    $sm5 = ['nim' => '2001010038', 'nama' => 'furkon', 'nilai' => 65];
    $sm6 = ['nim' => '2001010039', 'nama' => 'geby', 'nilai' => 50];
    $sm7 = ['nim' => '2001010040', 'nama' => 'Anisa', 'nilai' => 45];
    $sm8 = ['nim' => '2001010041', 'nama' => 'yunita', 'nilai' => 35];
    $sm9 = ['nim' => '2001010042', 'nama' => 'rohit', 'nilai' => 30];
    $sm10 = ['nim' => '2001010043', 'nama' => 'bagus', 'nilai' => 80];

    $ar_judul = ['No', 'Nim', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    $mahasiswa = [$sm1, $sm2, $sm3, $sm4, $sm5, $sm6, $sm7, $sm8, $sm9, $sm10];

    $jumlah_keseluruhanan = count($mahasiswa);
    $jumlah_nilai = array_column($mahasiswa, 'nilai');
    $nilai_total = array_sum($jumlah_nilai);
    $nilai_tertinggi = max($jumlah_nilai);
    $nilai_terendah = min($jumlah_nilai);
    $nilai_rata_rata = $nilai_total / $jumlah_keseluruhanan;

    $keterangan = [
        'Nilai Tertinggi' => $nilai_tertinggi,
        'Nilai Terendah' => $nilai_terendah,
        'Nilai Rata Rata' => $nilai_rata_rata,
        'Jumlah Mahasiswa' => $jumlah_keseluruhanan,
        'Jumlah Keseluruhan Nilai' => $nilai_total,
    ];
    ?>
    <h2 style="text-align: center;">DAFTAR NILAI MAHASISWA</h2>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr bgcolor="#14213d" style="color: #fff;">
                <?php
                foreach ($ar_judul as $judul) { ?>
                    <th>
                        <?= $judul ?>
                    </th>

                <?php } ?>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1;
            foreach ($mahasiswa as $mhs) {
                // Keterangan
                $keterangan_mhs = ($mhs['nilai'] >= 60) ? "Lulus" : "Tidak Lulus";
                $warna = $no % 2 == 1 ? '#adb5bd' : '#fFF';

                // Grade
                if ($mhs['nilai'] >= 90) {
                    $grade = "A";
                } elseif ($mhs['nilai'] >= 80) {
                    $grade = "B";
                } elseif ($mhs['nilai'] >= 70) {
                    $grade = "C";
                } elseif ($mhs['nilai'] >= 60) {
                    $grade = "D";
                } else {
                    $grade = "E";
                }

                // Predikat
                switch ($grade) {
                    case 'A':
                        $predikat = "Sangat Baik";
                        break;
                    case 'B':
                        $predikat = "Baik";
                        break;
                    case 'C':
                        $predikat = "Cukup";
                        break;
                    case 'D':
                        $predikat = "Kurang";
                        break;
                    case 'E':
                        $predikat = "Sangat Kurang";
                        break;
                    default:
                        $predikat = "Tidak Valid";
                        break;
                }

            ?>
                <tr bgcolor="<?= $warna ?>">
                    <td><?= $no++ ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $keterangan_mhs ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
            foreach ($keterangan as $ket => $hasil) {
            ?>
                <tr bgcolor="#495057" style="color: #fff;">
                    <td colspan="3"><?= $ket ?></td>
                    <td colspan="4"><?= $hasil ?></td>
                </tr>
            <?php } ?>
        </tfoot>
    </table>

</body>

</html>
