<?php 
include 'connect.php';
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}

if (isset($_POST['done'])) {
    $id_order = $_POST['id_order'];

    // ngisi variabel completed
    $updateQuery = "UPDATE `order` SET status_proses = 'Completed' WHERE id_order = '$id_order'";
    $conn->query($updateQuery);

    // insert data ke DB
    $tanggal = date('Y-m-d'); // ngambil tanggal
    $insertQuery = "INSERT INTO proses (id_order, tanggal, pendapatan)
                    SELECT o.id_order, '$tanggal', p.harga_produk
                    FROM `order` o
                    INNER JOIN produk p ON o.id_produk = p.id_produk
                    WHERE o.id_order = '$id_order'";
    $conn->query($insertQuery);
    header("Location: after-complete.php?id_order=$id_order");
    exit();
}
?>
