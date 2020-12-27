<?php

include 'koneksi.php';

$nama_user = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

if (isset($_POST['simpan'])) {
        $sql = "INSERT INTO users(name,email,password)VALUES ('$nama_user','$email','$password')";
        echo $sql;
        mysqli_query($koneksi, $sql);
 
}
header('location: login.php');