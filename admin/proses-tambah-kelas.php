<?php

$nama_kelas = $_POST['nama_kelas'];
$kompetesi_keahlian = $_POST['kompetesi_keahlian'];

include'../koneksi.php';
$sql = "INSERT INTO kelas(nama_kelas,kompetesi_keahlian) VALUES('$nama_kelas','$kompetesi_keahlian')";
$query = mysqli_query($koneksi, $sql);
if($query){
	header("location:?url=kelas");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=kelas');</script>";
}