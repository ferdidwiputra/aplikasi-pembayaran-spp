<?php

$koneksi = mysqli_connect('localhost','root','','spp_ferdi');

if(!$koneksi){
	echo"Koneksi Anda Gagal";
}