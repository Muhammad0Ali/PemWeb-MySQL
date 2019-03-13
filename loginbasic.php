<?php session_start();
    if(isset($_SESSION['username'])) {
                                       header('location:masukbasic.php');
                                     }
    require_once("koneksibasic.php");
?>
<html>
    <head><title>login</title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" type="text/css" href="media-querieslogin.css" />
    </head>

    <body class="bclogin">

        <div class="login" >
            <form action="prosesloginbasic.php" method="post">
                <h1 id="colorlogin" class="login-form">Masuk</h1>
                    <table>
                        <tbody>
                            <tr>
                                <td id="colorlogin">Username</td>
                                <td>: <input name="username" type="text" /></td>
                            </tr>
                            <tr>
                                <td id="colorlogin">Password</td>
                                <td>: <input name="password" type="password" /></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><input type="submit" value="Login" /> <input type="reset" value="Batal" /></td>
                            </tr>
                            <tr>
                                <td id="colorlogin" colspan="2" align="left">Belum Punya akun ? <a href="daftarbasic.php"><b id="colorlogin">Daftar</b></a></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right">atau <a href="responsive.php"><b id="colorlogin">Back</b></a></td>
                            </tr>
                        </tbody>
                    </table>
            </form>
        </div>
    </body>
</html>
