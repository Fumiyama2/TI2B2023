<?php

include_once "Pembeli.php";
include_once "Penjual.php";
include_once "Admin.php";

$penjual = new Penjual();
$pembeli = new Pembeli();
$admin = new Admin();

$penjual->daftar();
echo "<br>";
$penjual->masuk();
echo "<br>";
$penjual->keluar();
echo "<br>";
echo "<br>";

$pembeli->daftar();
echo "<br>";
$pembeli->masuk();
echo "<br>";
$pembeli->keluar();
echo "<br>";
echo "<br>";

$admin->daftar();
echo "<br>";
$admin->masuk();
echo "<br>";
$admin->keluar();
echo "<br>";
$admin->mengelola();