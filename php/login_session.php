<?php
// login.php

include 'connect.php';
session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);

$userQuery = "SELECT id_user, first_name, email, pass FROM user WHERE email='$email' AND pass='$password'";
$userResult = $conn->query($userQuery);

$adminQuery = "SELECT id_user, email FROM user WHERE email LIKE '%admin123@gmail.com%' AND pass='$password'";
$adminResult = $conn->query($adminQuery);

if ($userResult->num_rows > 0) {
  $row = mysqli_fetch_assoc($userResult);
  $_SESSION['loggedin'] = true;
  $_SESSION['id_user'] = $row['id_user'];
  $_SESSION['first_name'] = $row['first_name'];
  header("Location: account.php");
} elseif ($adminResult->num_rows > 0) {
  $row = mysqli_fetch_assoc($adminResult);
  $_SESSION['loggedin'] = true;
  $_SESSION['id_user'] = $row['id_user'];
  $_SESSION['email'] = $row['email'];
  header("Location: admin_dashboard.php");
} else {
  echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!'); window.location.href='login.php';</script>";
}
?>
