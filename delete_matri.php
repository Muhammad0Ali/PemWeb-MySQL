<?php
include "koneksibasic.php";
if (isset($_GET['id'])) {
$id_berita = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>
<html>
<head><title>Delete Berita</title>
<link rel="stylesheet" href="style.css">  <script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>
</head>
<body>

<?php
//proses delete berita
if (!empty($id_berita) && $id_berita != "") {
$query = "DELETE FROM materi WHERE
id_materi='$id_berita'";
$sql = mysql_query ($query);
if ($sql) {
echo "<h2><font color=blue>Materi telah berhasil
dihapus</font></h2>";
} else {
echo "<h2><font color=red>Materi gagal
dihapus</font></h2>";
}
echo "Klik <a href='arsip_materi_admin.php'>di sini</a>
untuk kembali ke halaman arsip materi";
} else {
die ("Access Denied");
}
?>

</body>
</html>
