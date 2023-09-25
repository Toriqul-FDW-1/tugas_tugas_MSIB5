<form method="GET">
    <label>Nama</label> <br>
    <input type="text" name="nama"><br>
    <label>Alamat</label> <br>
    <input type="text" name="alamat"><br>
    <input type="submit" name="proses" value="Simpan">
</form>
<?php
//memproses form
$nama = $_GET['nama'];
$almt = $_GET['alamat'];
//tampilkan data jika sudah diproses
$proses = $_GET['proses'];
if (isset($proses)) {
echo 'Nama : ' . $nama .'<br/>Alamat : ' . $almt;
}
?>

<hr>

<form method="POST">
    <label>Username</label> <br />
    <input name="uname" type="text" /><br />
    <label>Password</label> <br />
    <input name="pass" type="password" />
    <input type="submit" name="login" value="Login" />
</form>

<?php
//memproses form
$username = $_POST['uname'];
$password = $_POST['pass'];
//tampilkan data jika sudah diproses
$login = $_POST['login'];
if(isset($login)){
 echo 'Hello '.$username.
        ', password Anda '.$password;
}
?>