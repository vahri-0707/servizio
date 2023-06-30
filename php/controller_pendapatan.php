<?php
include 'connect.php';

// session_start();

// Fungsi untuk menghitung pendapatan
function hitungPendapatan($conn, $periode)
{
    $query = "SELECT SUM(b.harga_produk) AS total_pendapatan FROM proses a join produk b on (a.id_produk=b.id_produk) WHERE $periode";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $totalPendapatan = $row['total_pendapatan'];

    return $totalPendapatan;
}

// Pendapatan Harian
$harian = date('Y-m-d');
$totalPendapatanHarian = hitungPendapatan($conn, "DATE(tanggal) = '$harian'");

// Pendapatan Mingguan
$mingguan = date('Y-m-d', strtotime('-1 week'));
$totalPendapatanMingguan = hitungPendapatan($conn, "DATE(tanggal) >= '$mingguan'");

// Pendapatan Bulanan
$bulanan = date('Y-m-d', strtotime('-1 month'));
$totalPendapatanBulanan = hitungPendapatan($conn, "DATE(tanggal) >= '$bulanan'");

// Pendapatan Tahunan
$tahunan = date('Y-m-d', strtotime('-1 year'));
$totalPendapatanTahunan = hitungPendapatan($conn, "DATE(tanggal) >= '$tahunan'");

function getPendapatanBulanan($conn)
{
    $query = "SELECT DATE_FORMAT(tanggal, '%M %Y') AS bulan, SUM(b.harga_produk) AS total_pendapatan FROM proses a join produk b on (a.id_produk=b.id_produk) GROUP BY DATE_FORMAT(tanggal, '%Y-%m')";
    $result = mysqli_query($conn, $query);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}


// // Data pendapatan tahunan untuk chart
// $queryTahunan = "SELECT YEAR(a.tanggal) AS tahun, SUM(b.harga_produk) AS total_pendapatan FROM proses a join produk b on (a.id_produk=b.id_produk) GROUP BY YEAR(a.tanggal)";
// $resultTahunan = mysqli_query($conn, $queryTahunan);

// $pendapatanTahunan = [
//     'labels' => [],
//     'data' => []
// ];

// while ($rowTahunan = mysqli_fetch_assoc($resultTahunan)) {
//     $bulanTahun = date("F Y", strtotime($rowTahunan['tahun'] . '-' . $rowTahunan['bulan'] . '-01'));
//     $pendapatanTahunan['labels'][] = $bulanTahun;
//     $pendapatanTahunan['data'][] = $rowTahunan['total_pendapatan'];

// }
?>

