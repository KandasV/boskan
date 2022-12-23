<?php

	error_reporting(0);
	$host="localhost";
	$user="root";
	$pass="";
	$vt_adi="boskan";

	$baglan=mysqli_connect($host, $user, $pass, $vt_adi);

	mysqli_query($baglan,"SET CHARACTER SET 'utf8'");
	mysqli_query($baglan,"SET NAMES 'utf8'");
	
	
	if(!$baglan){
		echo "Veritabanı Bağlanmıyo Karşm Kapat Bilgisayarı";
	}
	
?>