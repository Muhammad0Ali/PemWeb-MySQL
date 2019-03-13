<?php
include "koneksibasic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>	Basic | Arsip Materi Admin</title>
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
				 <h2>Arsip Materi Admin</h2>

<ol>
<li>
<a href="arsip_matematika.php">Arsip Matematika</a>
<a href="arsip_b-indo.php">Arsip Bahasa Indonesia</a>
<a href="arsip_b-ingg.php">Arsip Bahasa Inggris</a>
</li>
</ol>


				</section> <!-- END Left Column -->	
 
                           <aside class="sidebar">
                      <ul>
                         <li><a href="input_materi.php">Input Materi</a></li>
                         <li><a href="logoutbasic.php">Log Out</a></li>
                      </ul>
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
