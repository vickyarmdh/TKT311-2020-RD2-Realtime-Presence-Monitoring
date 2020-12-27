<?php
include 'koneksi.php';
$course = $_POST['count'];
$email =$_POST['email'];

mysqli_query($koneksi, "INSERT INTO room (count,email)
            VALUES('$count','$email')");
?>