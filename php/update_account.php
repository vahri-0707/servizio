<?php
include "connect.php";

    $id=$_GET['id'];
    $firstname = $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];

    if($firstname=='' or $lastname==''or   $email==''or $nomor=='' ){
        echo "<script>alert('isi yang kosong')</script>";
        exit();
    }else{
        $var = "SELECT user.first_name, user.last_name, user.email,  user.nomor_telepon  FROM user  
        WHERE first_name='$id'";
        $hasil = $conn -> query($var);
        $edit_account = "UPDATE user SET first_name='$firstname', last_name= '$lastname',  email='$email', nomor_telepon='$nomor'
        WHERE first_name='$id'";
        $result = mysqli_query($conn,$edit_account);
      if($hasil->num_rows > 0){
        $baris = mysqli_fetch_assoc($hasil);
        $_SESSION['first_name'] = $baris['first_name'];
        header("Location: login.php");
    
      }
      }
    
?>