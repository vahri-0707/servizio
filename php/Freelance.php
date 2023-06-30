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
      echo "<script> alert('hi')</script>";
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
?>
