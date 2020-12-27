<?php
include 'session.php';
include 'koneksi.php';
$count = $_GET['count'];

	$nama_file = $count.'.jpg';
	$count +=1;
	$direktori = 'public/'.$_SESSION['email'].'/';
	$target = $direktori.$nama_file;
	if( is_dir($direktori) === false )
	{
	    mkdir($direktori);
	}
	move_uploaded_file($_FILES['webcam']['tmp_name'], $target);
?>