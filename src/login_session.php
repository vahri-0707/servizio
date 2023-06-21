<?php

require '../conf/koneksi.php';

session_start();

    
    $email = $_POST['email'];
    $pass= md5($_POST['pass']);
    $var = "SELECT user.first_name, user.email,user.pass FROM user WHERE email='$email'AND pass='$pass'";
    $hasil = $conn -> query($var);

    if ($hasil->num_rows > 0) {
        $baris = mysqli_fetch_assoc($hasil);
        $_SESSION['first_name'] = $baris['first_name'];
        header("Location: account.html");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";

    }
    

 session_start();

    $email = $_POST['email'];
    $pass= md5($_POST['pass']);
    $admin = "SELECT email FROM user WHERE email LIKE '%admin123@gmail.com%' AND pass='$pass'";
    $result = $conn -> query($admin);

    if ($result->num_rows > 0) {
        $baris = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $baris['email'];
        header("Location: admin_dasboard.html");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
?>
