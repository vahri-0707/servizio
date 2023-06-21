<?php
include 'connect.php';


$edit = $_GET['id_freelance'];
$var = "SELECT freelance.id_freelance ,freelance.nama_freelance, freelance.status_freelance, freelance.No_HP, freelance.foto_freelance, freelance.freelance_email, freelance.massage  
FROM freelance WHERE freelance.id_freelance = '$id_freelance' ";
$hasil = $conn -> query($var);
while ($baris=mysqli_fetch_assoc($hasil)) {
    $position = $_POST['position'];
    $freelance_name = $_POST['freelance_name'];
    $status_f = $_POST['status_f'];
    $freelance_phone = $_POST['freelance_phone'];
    $file_input = $_POST['file_input'];
    $freelance_email = $_POST['freelance_email'];
    $message= $_POST['message'];
  
}

?>