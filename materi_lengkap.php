<?php
include "koneksibasic.php";
?>
<?php
if (isset($_GET['id'])) {
$id_berita = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>	Basic | Pembahasan Materi </title>
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

			<div id="latest">
				<section class="left-col">
				 <h2>Pembahasan Materi</h2>

<?php
$query = "SELECT A.id_materi, B.nm_kategori, A.judul,
A.isi, C.username, A.tanggal
FROM materi A, kategori B, user C WHERE
A.id_kategori=B.id_kategori && A.id_pengirim=C.id_pengirim && A.id_materi='$id_berita'";
      $sql = mysql_query ($query);
    $hasil = mysql_fetch_array ($sql);
$id_berita = $hasil['id_materi'];
 $kategori = stripslashes ($hasil['nm_kategori']);
    $judul = stripslashes ($hasil['judul']);
      $isi = nl2br(stripslashes ($hasil['isi']));
 $pengirim = stripslashes ($hasil['username']);
  $tanggal = stripslashes ($hasil['tanggal']);
//tampilkan berita
echo "<h2  id=h2padding><font size=5 color=blue>$judul</font></h2><br>";
echo "<small>Materi dikirimkan oleh <b>$pengirim</b>
      pada tanggal <b>$tanggal</b> dalam kategori
      <b>$kategori</b></small>";
echo "<p>$isi</p>";
?>


				</section> <!-- END Left Column -->	
 
				<aside class="sidebar">
<div>
<?php
include "aside.php";
?>
</div>
<br/>
<div>
<h4>materi lainnya :</h4><br/>
<?php
$query = "SELECT A.id_materi, B.nm_kategori, A.judul,
          A.headline, C.username, A.tanggal
          FROM materi A, kategori B, user C WHERE
          A.id_kategori=B.id_kategori && A.id_pengirim=C.id_pengirim
          ORDER BY A.id_materi ASC LIMIT 0,4";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
$id_berita = $hasil['id_materi'];
 $kategori = stripslashes ($hasil['nm_kategori']);
    $judul = stripslashes ($hasil['judul']);
 $headline = nl2br(stripslashes ($hasil['headline']));
 $pengirim = stripslashes ($hasil['username']);
  $tanggal = stripslashes ($hasil['tanggal']);
//
//tampilkan berita
echo "<font size=4><a class=indek href='materi_lengkap.php?id=$id_berita'>$judul</a></font><br/><br/>";

echo "<hr>";
}
?>
</div>
				</aside>
			</div> <!-- END Latest -->
			<div class="clearfix"></div>
			
			<div id="about">
				<h3>Tentang</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere, 
				quis dapibus metus tempus. Vivamus sodales egestas consequat. Donec sodales aliquet lectus pellentesque 
				dignissim. Curabitur ipsum magna, sodales quis auctor quis, pulvinar eu neque.llis... </p>
			</div>	
		</section>	
		<hr/>
<?php
include "footerbsc.php";
?>
		
	</div> <!-- END Wrapper -->
	
<?php
include "script.php";
?>
</body>
</html>
