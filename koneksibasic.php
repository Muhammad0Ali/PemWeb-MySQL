<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $host = "localhost";
    $user = "root";
    $pass = "ratimint";
    $dbnm = "basic";
    $conn = mysql_connect ($host, $user, $pass);
    if ($conn) {
                $buka = mysql_select_db ($dbnm);
                if (!$buka) {
                             die ("Database tidak dapat dibuka");
                            }
                }
    else {
          die ("Server MySQL tidak terhubung");
?>