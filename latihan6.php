<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian</title>
</head>
<body>
    <h1>Form input penilaian</h1>
    <form method="POST">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" placeholder="Masukkan Nama"><br><br>
        <label for="matkul">Mata Kuliah :</label>
        <select name="matkul" id="matkul">
            <option value="">---Pilihan Matakuliah---</option>
            <option value="html">HTML dan CSS</option>
            <option value="js">JavaScript</option>
            <option value="ui">UI/UX</option>
            <option value="php">PHP</option>
        </select><br><br>
        <label for="nilai">Nilai :</label>
        <input type="text" name="nilai" placeholder="Masukkan Nilai">
        <br>
        <button name="proses" type="submit">Simpan</button>
    </form>

    <?php
    // Periksa apakah tombol submit telah ditekan
    if(isset($_POST['proses'])){
        // Ambil data dari form
        $nama = $_POST['nama'];
        $matakuliah = $_POST['matkul'];
        $nilai = $_POST['nilai'];
        
        // Hitung grade
        if($nilai >= 85 && $nilai <= 100) $grade = "A";
        else if($nilai >= 75 && $nilai < 85) $grade = "B";
        else if($nilai >= 60 && $nilai < 75) $grade = "C";
        else if($nilai >= 30 && $nilai < 60) $grade = "D";
        else if($nilai >= 0 && $nilai < 30) $grade = "E";
        else $grade = "";

        // Predikat dengan switch case
        switch ($grade) {
            case 'A': $predikat = 'Memuaskan'; break;
            case 'B': $predikat = 'Bagus'; break;
            case 'C': $predikat = 'Cukup'; break;
            case 'D': $predikat = 'Kurang'; break;
            case 'E': $predikat = 'Buruk'; break;
            default: $predikat = '';
        }

        // Tampilkan hasil
        if($grade != ""){
            echo "<h2>Nama Siswa: $nama</h2>";
            echo "<h2>Nilai: $nilai</h2>";
            echo "<h2>Matakuliah: $matakuliah</h2>";
            echo "<h2>Grade Nilai: $grade</h2>";
            echo "<h2>Predikat: $predikat</h2>";
        } else {
            echo "<h2>Nilai tidak valid. Masukkan nilai antara 0 dan 100.</h2>";
        }
    }
    ?>
</body>
</html>
