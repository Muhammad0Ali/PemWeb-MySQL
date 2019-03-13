<?
include "koneksibasic.php";
?>
<? session_start();
unset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>	Basic | Home</title>
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
			<div id="featured">
                <section id="left-col"> 
				    <h3 id="slmtdtng">Selamat datang di Basic.com</h3>
				    <p>Ya, sesuai dengan nama situs ini <i>Basic</i> merupakan singkatan dari belajar asik. Situs tentunya tidak lepas dari internet. Sedikit membahas tentang internet, menurut pandangan saya internet bagaikan dua sisi yang berbeda. ketika orang bijak yang memakai internet maka dapat bermanfaatlah internet tersebut. Sebaliknya jika yang memakai internet adalah orang yang kurang bijak (orang yang tidak bijak sama sekali) maka tidak ada satupun manfaat yang didapatnya. Maka dari itu bijaklah dalam memakai internet mulai dari sekarang :D .</p>
                    <br/>
                    <p>Kembali ke topik bahasan situs ini, di situs ini terdapat beberapa bahasan, yang meliputi pelajaran Matematika, Bahasa Indonesia, dan juga Bahasa Inggris. Materi di sini mungkin ada yang kurang lengkap. Dan saya sangat menerima kritik dan saran anda semua.</p>
                    <p>Dan tentunya semoga bermanfaat. amin..</p>
                </section>
                <aside id="sidebar">
                    <div id="slideshow">
                        <img src="gambar.jpg" alt="Keterangan Gambar" title="Judul Gambar" />
                        <img src="gambar1.jpg" alt="Keterangan Gambar" title="Judul Gambar" />
                        <img src="gambar2.jpg" alt="Keterangan Gambar" title="Judul Gambar" />
                        <img src="gambar3.jpg" alt="Keterangan Gambar" title="Judul Gambar" />
                        <img src="gambar4.jpg" alt="Keterangan Gambar" title="Judul Gambar" class="active" />
                    </div>
                    <div id="slideshow" class="slideshow">
                        <img src="gambarbmw.jpg" alt="Keterangan Gambar" title="Judul Gambar" />
                        <img src="gambarbmw1.jpg" alt="Keterangan Gambar" title="Judul Gambar" />
                        <img src="gambarbmw2.jpg" alt="Keterangan Gambar" title="Judul Gambar" />
                        <img src="31.jpg" alt="Keterangan Gambar" title="Judul Gambar" />
                        <img src="131.jpg" alt="Keterangan Gambar" title="Judul Gambar" class="active" />
                    </div>
                    <div id="slideshow">
                        <img src="gambar.jpg" alt="Keterangan Gambar" title="Judul Gambar" />
                        <img src="gambar1.jpg" alt="Keterangan Gambar" title="Judul Gambar" />
                        <img src="gambar2.jpg" alt="Keterangan Gambar" title="Judul Gambar" />
                        <img src="gambar3.jpg" alt="Keterangan Gambar" title="Judul Gambar" />
                        <img src="gambar4.jpg" alt="Keterangan Gambar" title="Judul Gambar" class="active" />
                     </div>
                </aside>
			</div> <!-- END Featured -->
 
			<hr/ style="opacity: 50%">

			<div id="latest">
				<section class="left-col">
					<h2  id="h2padding">Tutorial Terbaru :</h2><br/>
                        <?php
                            $query = "SELECT A.id_materi, B.nm_kategori, A.judul, A.headline, C.username, A.tanggal FROM materi A, kategori B, user C WHERE A.id_kategori=B.id_kategori && A.id_pengirim=C.id_pengirim ORDER BY A.id_materi DESC LIMIT 0,4";
                            $sql = mysql_query ($query);
                            while ($hasil = mysql_fetch_array ($sql))
                               {
                                    $id_berita = $hasil['id_materi'];
                                    $kategori = stripslashes ($hasil['nm_kategori']);
                                    $judul = stripslashes ($hasil['judul']);
                                    $headline = nl2br(stripslashes ($hasil['headline']));
                                    $pengirim = stripslashes ($hasil['username']);
                                    $tanggal = stripslashes ($hasil['tanggal']);
                                    //tampilkan berita
                                    echo "<font size=4><a class=indek href='materi_lengkap.php?id=$id_berita'>$judul</a></font>
                                    <br/><br/>";
                                    echo "<small>Materi dikirimkan oleh <b>$pengirim</b> pada tanggal <b>$tanggal</b> dalam kategori <b>$kategori</b></small>";
                                    echo "<p>$headline</p>";
                                    echo "<hr/>";
                                }
                        ?>
				</section> <!-- END Left Column -->	
                <br/>
				<aside id="widget" class="sidebar">
					<?php
					    include "aside.php";
					?>	
				</aside>
			</div> <!-- END Latest -->

			<div class="clearfix"></div>
			
			<div id="about">
				<h3>Tentang</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor eros at ipsum posuere, quis dapibus metus tempus. Vivamus sodales egestas consequat. Donec sodales aliquet lectus pelle dignissim. Curabitur ipsum magna, sodales quis auctor quis, pulvinar eu neque.llis... </p>
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
