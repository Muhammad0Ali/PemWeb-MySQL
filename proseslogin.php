<?php session_start();
require_once("koneksibasic.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
echo "Username Belum Terdaftar!";
echo "<a href=loginbasic.php>Back</a>";
} else {
if($pass != $hasil['password']) {
echo "Password Salah!";
echo "<a href=loginbasic.php>Back</a>";
} else {
$_SESSION['username'] = $hasil['username'];
header('location:masukbasic.php');
}
}
?>

