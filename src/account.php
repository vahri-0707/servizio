<?php
require '../conf/koneksi.php';

$email = $_POST['email'];
$pass= $_POST['pass'];

$query_sql = "SELECT * FROM user WHERE email = '$email' AND pass= '$pass'";

$result = mysqli_query($koneksi, $query_sql);
$row = $result -> fetch_assoc();

if($email=="admin123@gmail.com"&& $pass=="admin123")
  header("Location: admin_dasboard.html");
else{
    echo "Pendaftaran Gagal";
}
?>