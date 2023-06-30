<?php

include 'connect.php';
if (isset($_POST['done'])) {
    $id_order = $_POST['id_order'];

    // ngisi variabel completed
    $updateQuery = "UPDATE `order` SET status_proses = 'Completed' WHERE id_order = '$id_order'";
    $conn->query($updateQuery);

    // insert data ke DB
    $tanggal = date('Y-m-d'); // ngambil tanggal
    $insertQuery = "INSERT INTO proses (id_order, tanggal) VALUES ('$id_order', '$tanggal')";
    $conn->query($insertQuery);
    header("Location: after-complete.php");
    exit();
}
?>
