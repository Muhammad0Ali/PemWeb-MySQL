<?php session_start();
if(isset($_SESSION['username'])) {
header('location:responsive.php'); }
?>
<html>
<head><title>Berita Lengkap</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" type="text/css" href="media-querieslogin.css" />
</head>
<body class="bclogin">

<div class="login" >
<form action="prosesdaftarbasic.php" method="post">
<table>
<tbody>
<tr>
<td colspan="2" align="center">
<h1 id="colorlogin">Daftar Baru</h1>
</td>
</tr>
<tr>
<td id="colorlogin">Username</td>
<td>: <input name="username" type="text" /></td>
</tr>
<tr>
<td id="colorlogin">Password</td>
<td>: <input name="password" type="password" /></td>
</tr>
<tr>
<td id="colorlogin">Email</td>
<td>: <input name="email" type="text" /></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="Daftar" /> <input type="reset" value="Batal" /></td>
</tr>
<tr>
<td id="colorlogin" colspan="2" align="center">Sudah Punya akun ? <a href="loginbasic.php"><b id="colorlogin">Login</b></a></td>
</tr>
</tbody>
</table>
</form>
</div>


</body>
</html>
