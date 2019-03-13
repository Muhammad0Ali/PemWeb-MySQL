<?php
include "koneksibasic.php";
if (isset($_GET['id'])) {
$id_berita = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
$query = "SELECT id_materi, id_kategori, judul, headline, isi,
id_pengirim, tanggal
FROM materi WHERE id_materi='$id_berita'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$id_berita = $hasil['id_materi'];
$id_kategori = stripslashes ($hasil['id_kategori']);
$judul = stripslashes ($hasil['judul']);
$headline = stripslashes ($hasil['headline']);
$isi = stripslashes ($hasil['isi']);
$pengirim = stripslashes ($hasil['id_pengirim']);
$tanggal = stripslashes ($hasil['tanggal']);
//proses edit berita
if (isset($_POST['Edit'])) {
$id_berita = $_POST['hidberita'];
$judul = addslashes (strip_tags ($_POST['judul']));
$kategori = $_POST['kategori'];
$headline = addslashes (strip_tags ($_POST['headline']));
$isi_berita = addslashes (strip_tags ($_POST['isi']));
$pengirim = addslashes (strip_tags ($_POST['pengirim']));
//update berita
$query = "UPDATE materi SET
id_kategori='$kategori',judul='$judul',headline='$headline',
isi='$isi_berita',id_pengirim='$pengirim' WHERE
id_materi='$id_berita'";
$sql = mysql_query ($query);
if ($sql) {
           echo "<h2><font color=blue>Proses edit telah berhasil </font></h2>";
          }
else {
      echo "<h2><font color=red>Materi gagal diedit</font></h2>";
     }
}
?>
<html>
<head><title>Edit Materi</title>
<link rel="stylesheet" href="style.css"> <script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>
</head>
<body>

<br><br>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0"
width="700">
<tr>
<td colspan="2"><h2>Edit Materi</h2></td>
</tr>
<tr>
<td width="200">Judul Materi</td>
<td>: <input type="text" name="judul"
size="30" value="<?php echo $judul ?>"></td>
</tr>
<tr>
<td>Kategori</td>
<td>:
<select name="kategori">
<?php
$query = "SELECT id_kategori,
nm_kategori FROM kategori ORDER BY nm_kategori";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array
($sql)) {
$selected = ($hasil['id_kategori']==
$id_kategori) ? "selected" : "";
echo "<option
value='$hasil[id_kategori]'
$selected>$hasil[nm_kategori]</option>";
}
?>
</select></td>
</tr>
<tr>
<td>Headline Materi</td>
<td>: <textarea name="headline" cols="50"
rows="4"><?php echo $headline?></textarea></td>
</tr>
<tr>
<td>Isi Materi</td>
<td>: <textarea name="isi" cols="50"
rows="10"><?php echo $isi?></textarea></td>
</tr>
<tr>
<td>Pengirim</td>
<td>:
<select name="pengirim">
<?php
$query = "SELECT id_pengirim,
username FROM user ORDER BY username";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array
($sql)) {
$selected = ($hasil['id_pengirim']==
$pengirim) ? "selected" : "";
echo "<option
value='$hasil[id_pengirim]'
$selected>$hasil[username]</option>";
}
?>
</select></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;
<input type="hidden" name="hidberita"
value="<?php echo $id_berita?>">
<input type="submit" name="Edit" value="Edit
Materi">&nbsp;
<input type="reset" name="reset"
value="Cancel"></td>
</tr>
</table>
</FORM>


</body>
</html>
