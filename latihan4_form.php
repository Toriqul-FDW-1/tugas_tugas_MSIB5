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
if (isset($login)) {
    echo 'Hello ' . $username .
        ', password Anda ' . $password;
}
?>