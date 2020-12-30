<?php
//koneksi ke database mysql,
$koneksi = mysqli_connect("db","root","example","akademik");

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>
