<?php
$databaseHost = 'localhost';
$databaseName = 'web_profil';
$databaseUsername = 'root';
$databasePassword = 'password';

$mysqli = mysqli_connect($databaseHost, $databaseName, $databaseUsername, $databasePassword) ;
if (mysqli) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}