<?php
include 'connect.php';

$id_freelance = $_GET['id_freelance'];

$var = "DELETE  FROM freelance WHERE id_freelance = '$id_freelance'";
$hasil = $conn -> query($var);

if($hasil === TRUE){
    header('Location: admin_manageFreelance.php');
}else {
    echo "data gagal dihapus karena ".$conn -> error;
}
$conn -> close();

?>