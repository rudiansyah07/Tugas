<?php
include 'koneksi.php';
$id_peserta = $_GET['id_peserta'];
$hasil = $koneksi->query("DELETE FROM dts_2020 WHERE id_peserta = '$id_peserta'");
header('location:peserta.php');