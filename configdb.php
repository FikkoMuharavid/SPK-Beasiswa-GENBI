<?php
	@session_start();
	$_SESSION['judul'] = 'SPK CALON PENERIMA BEASISWA';
	$_SESSION['welcome'] = 'SISTEM PENDUKUNG KEPUTUSAN BERBASIS WEB DENGAN METODE WEIGHT PRODUCT';
	$_SESSION['by'] = '© Kelompok 2';
	$mysqli = new mysqli('localhost','root','','spkwpkel2');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
?>
