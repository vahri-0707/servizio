<?php
include "connect.php";

$firstname = $_GET['id'];
$delete = "DELETE FROM user WHERE first_name = '$firstname'";
$hasil = $conn->query($delete);

if ($hasil === TRUE) {
    $conn->close();
    echo "<script>
            setTimeout(function () {
                window.location.href = 'login.php'; 
            }, 1000);
          </script>";
    session_start();
    session_unset(); // Menghapus semua data sesi
    session_destroy(); // Menghancurkan sesi

    exit(); // Keluar dari skrip saat ini
} else {
    echo "data gagal dihapus karena " . $conn->error;
}

$conn->close();
?>
