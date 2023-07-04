<?php
include 'connect.php';

$id_produk = $_GET['id_produk'];

$var = "DELETE  FROM produk WHERE id_produk = '$id_produk'";
$hasil = $conn -> query($var);

if($hasil === TRUE){
    header('Location: admin_manageProduct.php');
}else {
    echo "data gagal dihapus karena ".$conn -> error;
}
$conn -> close();

?>