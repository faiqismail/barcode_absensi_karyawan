<?php
session_start();

$_SESSION["id_orang"] = '';
$_SESSION["nik"] = '';
$_SESSION["nama"] = '';
$_SESSION["foto"] = '';

unset($_SESSION["id_orang"]);
unset($_SESSION["nik"]);
unset($_SESSION["nama"]);
unset($_SESSION["foto"]);


session_unset();
session_destroy();
header('Location: ../absen.php');
?>
