<?php require_once("koneksibasic.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
if(mysql_num_rows($cekuser) <> 0) {
    echo "Username Sudah Terdaftar!";
    echo "<a href=daftarbasic.php>&amp;amp;laquo; Back</a>";
} else {
    if(!$username || !$pass) {
        echo "Masih ada data yang kosong!";
        echo "<a href=daftarbasic.php>Back</a>";
    } else {
        $simpan = mysql_query("INSERT INTO user(username, password, email) VALUES('$username','$pass','$email')");
        if($simpan) {
            echo "Pendaftaran Sukses, Silahkan <a href=loginbasic.php>Login</a>";
        } else {
            echo "Proses Gagal!";
        }
    }
}
?>
