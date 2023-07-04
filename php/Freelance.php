<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $position = $_POST['position'];
    $freelance_name = $_POST['freelance_name'];
    $status_f = $_POST['status_f'];
    $freelance_phone = $_POST['freelance_phone'];
    $freelance_email = $_POST['freelance_email'];
    $message = $_POST['message'];

    // Nama file yang diunggah
    $filename = $_FILES['image1']['name'];

    // Path sementara file
    $temp_name = $_FILES['image1']['tmp_name'];

    // Direktori tujuan untuk menyimpan gambar
    $target_dir = 'C:/xampp/htdocs/servizio-1/php/images/';

    // Path lengkap ke file tujuan
    $target_path = $target_dir . $filename;

    // checking
    if($position == '' || $freelance_name == '' || $status_f == '' || $freelance_phone == '' || $freelance_email == '' || $message == '' || $_FILES['image1']['name'] == ''){
      echo "<script>alert('isi')</script>";
      exit();
    } else {
        move_uploaded_file($temp_name, $target_path);

        // insert  
        $submit = "INSERT INTO freelance (id_kategori, nama_freelance, status_freelance, No_HP, foto_Freelance, freelance_email, massage) VALUES 
        ('$position', '$freelance_name', '$status_f', '$freelance_phone', '$filename', '$freelance_email', '$message');";
        $result = mysqli_query($conn, $submit);

        
        if($result){
            echo "<script>alert('Success');</script>";
            header('Location: admin_manageFreelance.php');
            exit();
        } else {
            echo "<script>alert('Failed to insert data.');</script>";
        }
    }
}

if(isset($_POST['edit_freelance'])){
  
    $edit= "SELECT * FROM freelance " ;
    $hasil_edit=mysqli_query($conn,$edit);
    while ($baris=mysqli_fetch_array($hasil_edit)) {
        $id_freelance=$baris['id_freelance'];
        $id_posisi=$baris['freelance_name'];
        $nama_freelance=$baris['nama_freelance'];
        $status_freelance=$baris['status_freelance'];
        $No_HP=$baris['No_HP'];
        $freelance_email=$baris['freelance_email'];
        $message=$baris['massage'];
  
    //images
    $image1=$_FILES['image1']['name']; 
  //tmp images 
    $temp_image1=$_FILES['image1']['tmp_name'];  
      
      // Direktori tujuan untuk menyimpan gambar
    $target_dir = 'C:/xampp/htdocs/servizio-1/php/images/';
  
    // Path lengkap ke file tujuan
    $target_path1 = $target_dir . $image1;
      
    move_uploaded_file($temp_image1, $target_path1); 
  
      $edit_freelance = "UPDATE freelance SET id_freelance='$id_freelance', id_kategori='$id_posisi', nama_freelance= '$nama_freelance', status_freelance='$status_freelance', No_HP='$No_HP', foto_Freelance='$image1', freelance_email='$freelance_email', massage='$message'
      WHERE id_freelance='$id_freelance'";
    $result = mysqli_query($conn,$edit_freelance);
    if($result){
      echo "<script>alert('success')</script>";
      header('Location: admin_manageFreelance.php');
  
    }
  
  }
  }
  
  
  






?>
