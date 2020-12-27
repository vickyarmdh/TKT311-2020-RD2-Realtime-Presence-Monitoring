<?php

session_start();


// Session Time Out (Nanti Buka Yang Bawah)



if (isset($_SESSION["username"])) {
    if (time() - $_SESSION["login_time_stamp"] > 2592000) {
        session_unset();
        session_destroy();
        header("location:login.php");
    }
} else {
    header("location:login.php");
}
