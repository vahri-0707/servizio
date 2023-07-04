<?php 
include 'connect.php';


if (isset($_POST['submitni'])) {
    $rating_produk = $_POST['rate'];
    $rating_freelance = $_POST['ratefreelance'];
    $id_order = $_GET['id_order']; // Mengambil nilai id_order dari URL

    $query = "SELECT o.id_order, o.id_produk, o.id_freelance
              FROM `order` AS o
              JOIN produk AS p ON o.id_produk = p.id_produk
              JOIN freelance AS f ON o.id_freelance = f.id_freelance
              WHERE o.id_order = '$id_order'";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      // Data ditemukan
      $row = $result->fetch_assoc();
      $id_produk = $row['id_produk'];
      $id_freelance = $row['id_freelance'];
      // Simpan rating produk ke dalam tabel laris
      $insertProdukRatingQuery = "INSERT INTO laris (id_order, id_produk, rating_produk) 
                                  VALUES ('$id_order', '$id_produk', '$rating_produk')";  
      $conn->query($insertProdukRatingQuery);

      // Simpan rating freelance ke dalam tabel rate_freelance
      $insertFreelanceRatingQuery = "INSERT INTO rate_freelance (id_order, id_freelance, rating_freelance) 
                                     VALUES ('$id_order', '$id_freelance', '$rating_freelance')";
      $conn->query($insertFreelanceRatingQuery);
    }
    else {
      
    }

    $conn->close();

    header("Location: order-history.php");
    exit();
}
?>
