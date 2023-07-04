<?php
include 'connect.php';

// Fungsi untuk menghitung pendapatan
function hitungPendapatan($conn, $periode)
{
    $query = "SELECT SUM(proses.pendapatan) AS total_pendapatan
              FROM proses
              JOIN `order` ON (proses.id_order=order.id_order)
              JOIN produk ON (order.id_produk=produk.id_produk)
              WHERE order.status_order = 'Confirmed' AND order.status_proses = 'Completed' AND $periode";
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

// Mendapatkan data produk tertinggi
function getProdukTeratas($conn)
{
    $query = "SELECT `order`.id_produk, COUNT(order.id_produk) AS jumlah_produk, produk.judul_produk, `order`.`status_order`, `order`.`status_proses` 
                FROM proses
                JOIN `order` ON (proses.id_order=order.id_order)
                JOIN produk ON (order.id_produk=produk.id_produk)
                WHERE `order`.status_order = 'Confirmed' AND `order`.status_proses = 'Completed' 
                GROUP BY `order`.id_produk
                ORDER BY jumlah_produk DESC
                LIMIT 4";
    $result = mysqli_query($conn, $query);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

// Mendapatkan data produk terendah
function getProdukTerbawah($conn)
{
    $query = "SELECT `order`.id_produk, COUNT(order.id_produk) AS jumlah_produk, produk.judul_produk, `order`.`status_order`, `order`.`status_proses` 
    FROM proses
    JOIN `order` ON (proses.id_order=order.id_order)
    JOIN produk ON (order.id_produk=produk.id_produk)
    WHERE `order`.status_order = 'Confirmed' AND `order`.status_proses = 'Completed' 
    GROUP BY `order`.id_produk
    ORDER BY jumlah_produk ASC
    LIMIT 4";
    $result = mysqli_query($conn, $query);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

// Mendapatkan data pendapatan bulanan
function getPendapatanBulanan($conn)
{
    $query = "SELECT DATE_FORMAT(tanggal, '%M %Y') AS bulan, SUM(produk.harga_produk) AS total_pendapatan 
    FROM proses
    JOIN `order` ON (proses.id_order=order.id_order)
    JOIN produk ON (order.id_produk=produk.id_produk)
    WHERE order.status_order = 'Confirmed' AND order.status_proses = 'Completed'
    GROUP BY DATE_FORMAT(tanggal, '%Y-%m')";
    $result = mysqli_query($conn, $query);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

// Mengambil data produk teratas
$dataProdukTeratas = getProdukTeratas($conn);
$jsonDataProdukTeratas = json_encode($dataProdukTeratas);

// Mengambil data produk terbawah
$dataProdukTerbawah = getProdukTerbawah($conn);
$jsonDataProdukTerbawah = json_encode($dataProdukTerbawah);

// Mengambil data pendapatan bulanan
$dataPendapatanBulanan = getPendapatanBulanan($conn);
$jsonDataPendapatanBulanan = json_encode($dataPendapatanBulanan);
?>
