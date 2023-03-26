<?php

$id_kelas= $_GET['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetesi_keahlian = $_POST['kompetesi_keahlian'];

include'../koneksi.php';
$sql = "UPDATE kelas SET nama_kelas='$nama_kelas',kompetesi_keahlian='$kompetesi_keahlian' WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
if($query){
	header("location:?url=kelas");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=kelas');</script>";
}