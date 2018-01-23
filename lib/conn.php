<?php
	$host = "172.17.0.2";
	$user = "root";
	$pass = "root";
	$db = "penjualan";

	$conn = mysql_connect($host, $user, $pass);
	if ($conn) {
		$dbselect = mysql_select_db($db, $conn) or die ("Tidak terhubung ke Database.");
	}else{
		echo "Tidak terkoneksi ke server!";
	}

	include "fungsi_flash.php";
?>