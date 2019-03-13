
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>	Basic | Materi Matematika </title>
	<link rel="stylesheet" type="text/css" href="style/reset.css" />
	<link rel="stylesheet" type="text/css" href="style1.css" />
	<link rel="stylesheet" type="text/css" href="media-queries.css" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,400italic,700italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
 
<body id="home">
	<div id="wrapper">
		
<?php
include "headerbsc.php";
?>
				
		<section id="main-content">
<?php
include "koneksibasic.php";
//proses input berita
if (isset($_POST['Input'])) {
     $judul = addslashes (strip_tags ($_POST['judul']));
  $kategori = $_POST['kategori'];
  $headline = addslashes (strip_tags ($_POST['headline']));
$isi_berita = addslashes (strip_tags ($_POST['isi']));
  $pengirim = addslashes (strip_tags ($_POST['pengirim']));
//insert ke tabel
     $query = "INSERT INTO materi
               VALUES('','$kategori','$judul','$headline','$isi_berita','$pengirim',now())";
       $sql = mysql_query ($query);
if ($sql) {
echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
} else {
echo "<h2><font color=red>Berita gagal ditambahkan</font></h2>";
}
}
?>


			<div id="latest">
				<section class="left-col">
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="700">
  <tr>
    <td colspan="2"><h2>Input Materi</h2></td>
  </tr>
  <tr>
    <td width="200">Judul Materi</td>
    <td>: <input type="text" name="judul" size="30"></td>
  </tr>
  <tr>
    <td>Kategori</td>
    <td>:
  <select name="kategori">
<?php
$query = "SELECT id_kategori, nm_kategori FROM kategori ORDER BY nm_kategori";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
echo "<option
             value='$hasil[id_kategori]'>$hasil[nm_kategori]</option>";
}
?>
  </select></td>
</tr>
 
  <tr>
    <td>Headline Berita</td>
    <td>: <textarea name="headline" cols="50" rows="4"></textarea></td>
  </tr>
  <tr>
    <td>Isi Berita</td>
    <td>: <textarea name="isi" cols="50" rows="10"></textarea></td>
  </tr>
  <tr>
    <td>Pengirim</td>
    <td>:  <select name="pengirim">
<?php
$query = "SELECT id_pengirim, username FROM user ORDER BY username";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
echo "<option
             value='$hasil[id_pengirim]'>$hasil[username]</option>";
}
?>
  </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Berita">&nbsp;
    <input type="reset" name="reset" value="Cancel">
    </td>
 </tr>

</table>
</FORM>

				</section> <!-- END Left Column -->
<br/>
                           <aside class="sidebar">
                      <ul>
                         <li><a href="arsip_materi_admin.php">Arsip Materi</a></li>
                         <li><a href="logoutbasic.php">Log Out</a></li>
                      </ul>
                           </aside>
                        </div> <!-- END Latest -->
<br/>
		</section>
<br/><br/>	
		
<?php
include "footerbsc.php";
?>
		
	</div> <!-- END Wrapper -->
<?php
include "script.php";
?>	

</body>
</html>
