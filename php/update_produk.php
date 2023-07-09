<?php
include 'connect.php';

if(isset($_POST['edit_produk'])){
    $id_produk= $_POST['id_produk'];
    $produk = $_POST['nama_produk'];
    $status = $_POST['status'];
    $revisi = $_POST['revisi'];
    $kategori = $_POST['kategori'];
    $delivery = $_POST['delivery'];
    $price = $_POST['price'];
    $deskripsi = $_POST['deskripsi'];
    $detail = $_POST['detail'];
    $format = $_POST['format'];
  
    //images
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']['name'];
  
    //tmp images
    $temp_image1 = $_FILES['image1']['tmp_name'];
    $temp_image2 = $_FILES['image2']['tmp_name'];
    $temp_image3 = $_FILES['image3']['tmp_name'];
  
    // Direktori tujuan untuk menyimpan gambar
    $target_dir = 'C:/xampp/htdocs/servizio-1/php/images/';
  
    // Path lengkap ke file tujuan
    $target_path1 = $target_dir . $image1;
    $target_path2 = $target_dir . $image2;
    $target_path3 = $target_dir . $image3;
  
    // Move uploaded images to the target directory
    move_uploaded_file($temp_image1, $target_path1);
    move_uploaded_file($temp_image2, $target_path2);
    move_uploaded_file($temp_image3, $target_path3); 
  
    $edit_produk = "UPDATE produk SET judul_produk='$produk', tersedia='$status', revisi='$revisi', id_kategori='$kategori', waktu_pengiriman='$delivery', 
      harga_produk='$price', deskripsi_produk='$deskripsi', gambar_produk1='$image1', gambar_produk2='$image2', gambar_produk3='$image3', detail_produk='$detail', format_produk='$format'
      WHERE id_produk='$id_produk'";
      
    $result = mysqli_query($conn, $edit_produk);
    if($result){
      echo "<script>alert('success')</script>";
      header('Location: admin_manageProduct.php');
      exit();
    }
  }
  ?>