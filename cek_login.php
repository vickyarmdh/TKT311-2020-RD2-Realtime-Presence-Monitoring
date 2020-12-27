<?php

// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['email'];
$password = md5($_POST['password']);
$link = '';

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from users where email='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);


// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);
    
   
        $_SESSION['username'] = $data['name'];
        $_SESSION['email'] = $data['email'];
        $_SESSION["login_time_stamp"] = time();
        header("location:main/index.php");

} else {
    header("location:login.php");
}
