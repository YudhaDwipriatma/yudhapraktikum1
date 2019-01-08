<?php
$nama = "Firdausa";
$kelas = "xirpl2" ;

function tampil_nama() {
global $nama;
echo "Nama Saya : ".$nama;
}

function tampil_kelas() {
global $kelas;
echo "<br>";
echo "Nama Kelas : ".$kelas;
}
tampil_nama();
tampil_kelas();
?>   