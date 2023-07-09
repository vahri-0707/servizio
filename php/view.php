<?php 
include 'connect.php';
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
  $userId = $_SESSION['id_user'];
  $username = $_SESSION['first_name'];
}
else{
  $loggedin = false;
  $userId = 0;
}

if (isset($_POST['bayar'])) {
  $id_user = $_SESSION['id_user'];
  $id_order = $_POST['id_order'];
  $payment = $_POST['payment'];
  $id_produk = $_GET['id'];

  $pilih = "SELECT produk.id_produk FROM produk WHERE produk.id_produk='$id_produk'";
  $hasil = mysqli_query($conn, $pilih);
  $baris = $hasil->fetch_assoc();
  $id_produk = $baris['id_produk'];

  $id_freelance = $_POST['freelance'];

  $query = "INSERT INTO `order` (id_order, id_user, id_freelance, id_produk, payment)
            VALUES ('$id_order', '$id_user', '$id_freelance', '$id_produk', '$payment')";

  $hasil = $conn->query($query);

  if ($hasil === TRUE) {
    header("Location: order-history_ongoing.php?id=$id_produk");
  } else {
    echo "gagal!";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../dist/output.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body class="bg-darkest font-poppins">
    <nav class="w-full fixed left-0 top-0 z-50 nav">
      <!-- header start -->
      <header class="py-4 shadow-sm bg-darkest">
        <div class="container flex items-center justify-between">
          <!-- logo start -->
          <a href="index.php">
            <img src="images/logo servizio.png" alt="" class="w-32" />
          </a>
          <!-- logo end -->

          <!-- search engine start -->
          <div class="w-full xl:max-w-xl lg:max-w-lg lg:flex relative hidden">
            <span class="absolute left-4 top-3 text-lg text-gray-400">
              <i class="fas fa-search"></i>
            </span>
            <input
              type="text"
              class="text-white bg-darkest pl-12 w-full border border-r-0 border-primary py-3 px-3 rounded-l-md focus:ring-primary focus:border-primary focus:bg-darkest"
              placeholder="What services are you looking for today?"
            />
            <button
              type="submit"
              class="bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 text-white px-8 font-medium rounded-r-md hover:bg-transparent transition"
            >
              Search
            </button>
          </div>
          <!-- search engine end -->

          <!-- icons start -->
          <div class="space-x-6 flex items-center">
        <?php
  if ($loggedin) {
        echo"  <a href='account.php' class='block text-center text-white hover:text-primary transition'>
            <div class='text-2xl'>
              <i class='far fa-user'></i>
            </div>
            <div class='text-xs leading-3'>Account</div>
          </a>";
  }?>
        </div>
          <!-- icons end -->
        </div>
      </header>
      <!-- header end -->

<!-- navbar start -->
<div class="bg-white hidden lg:block">
        <div class="container">
          <div class="flex">
            <!-- all category start -->
            <div
              class="px-8 py-4 bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 flex items-center cursor-pointer group relative"
            >
              <span class="text-textcolor">
                <i class="fas fa-bars"></i>
              </span>
              <span class="capitalize ml-2 text-textcolor font-medium">All categories</span>
              <div class="absolute left-0 top-full w-full bg-dark shadow-md py-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible transition duration-300 z-50 divide-y divide-gray-300 divide-dashed">
                <!-- first category -->
                <a href="kategori.php?id=1" class="px-6 py-3 flex items-center hover:bg-[#484F59] transition">
                  <img src="images/icons/programming.png" class="w-5 h-5 object-contain" />
                  <span class="ml-6 text-white text-xs">Programming</span>
                </a>
                <!-- first category end -->
                <!-- second category -->
                <a href="kategori.php?id=2" class="px-6 py-3 flex items-center hover:bg-[#484F59] transition">
                  <img src="images/icons/videoediting.png" class="w-5 h-5 object-contain" />
                  <span class="ml-6 text-white text-xs">Video Editing</span>
                </a>
                <!-- second category end -->
                <!-- third category -->
                <a href="kategori.php?id=3" class="px-6 py-3 flex items-center hover:bg-[#484F59] transition">
                  <img src="images/icons/graphicdesign.png" class="w-5 h-5 object-contain" />
                  <span class="ml-6 text-white text-xs">Design Graphic</span>
                </a>
                <!-- third category end -->
                <!-- fourth category -->
                <a href="kategori.php?id=4" class="px-6 py-3 flex items-center hover:bg-[#484F59] transition">
                  <img src="images/icons/digitalmarketing.png" class="w-5 h-5 object-contain" />
                  <span class="ml-6 text-white text-xs">Digital Marketing</span>
                </a>
                <!-- fourth category end -->
                <!-- fifth category -->
                <a href="kategori.php?id=5" class="px-6 py-3 flex items-center hover:bg-[#484F59] transition">
                  <img src="images/icons/musicaudio.png" class="w-5 h-5 object-contain" />
                  <span class="ml-6 text-white text-xs">Music & Audio</span>
                </a>
                <!-- fifth category end -->
                <!-- sixth category -->
                <a href="kategori.php?id=6" class="px-6 py-3 flex items-center hover:bg-[#484F59] transition">
                  <img src="images/icons//writing.png" class="w-5 h-5 object-contain" />
                  <span class="ml-6 text-white text-xs">Writing</span>
                </a>
                <!-- sixth category end -->
              </div>
            </div>

<!-- link navbar menu start -->
<div class="flex items-center justify-between flex-grow pl-12">
  <div class="flex items-center space-x-14 text-base capitalize">
    <a href="index.php" class="text-textcolor hover:text-primary transition">Home</a>
    <a href="shop.php" class="text-textcolor hover:text-primary transition">Shop</a>
    <a href="#" class="text-textcolor hover:text-primary transition">About us</a>
    <a href="#" class="text-textcolor hover:text-primary transition">Contact us</a>
  </div>
  <?php
  if (isset($_SESSION['first_name'])) {
    echo '<span class="ml-auto justify-self-end text-textcolor hover:text-primary transition">Selamat Datang ! ' . $_SESSION['first_name'] . '</span>';
  } else {
    echo '<a href="login.php" class="ml-auto justify-self-end text-textcolor hover:text-primary transition">Register/Login</a>';
  }
  ?>
</div>
<!-- link navbar menu end -->
        </div>
      </div>
    </nav>
    <!-- navbar end -->
    
    <!-- mobile menubar -->
    <div class="fixed w-full border-t border-gray-500 shadow-sm bg-dark py-3 bottom-0 left-0 flex justify-around items-start px-6 lg:hidden z-40">
      <a href="javascript:void(0)" class="block text-center text-white hover:text-primary transition relative">
        <div class="text-2xl" id="menuBar">
          <i class="fas fa-bars"></i>
        </div>
        <div class="text-xs leading-3">Menu</div>
      </a>
      <a href="#" class="block text-center text-white hover:text-primary transition relative">
        <div class="text-2xl">
          <i class="fas fa-list-ul"></i>
        </div>
        <div class="text-xs leading-3">Category</div>
      </a>
      <a href="#" class="block text-center text-white hover:text-primary transition relative">
        <div class="text-2xl">
          <i class="fas fa-search"></i>
        </div>
        <div class="text-xs leading-3">Search</div>
      </a>
      <a href="cart.php" class="text-center text-white hover:text-primary transition relative">
        <span class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">3</span>
        <div class="text-2xl">
          <i class="fas fa-shopping-bag"></i>
        </div>
        <div class="text-xs leading-3">Cart</div>
      </a>
    </div>
    <!-- mobile menu end -->

    <!-- mobile sidebar menu -->
    <div class="fixed left-0 top-0 w-full h-full z-50 bg-black bg-opacity-30 shadow hidden" id="mobileMenu">
      <div class="absolute left-0 top-0 w-72 h-full z-50 bg-dark shadow">
        <div id="closeMenu" class="text-gray-400 hover:text-primary text-lg absolute right-3 top-3 cursor-pointer">
          <i class="fas fa-times"></i>
        </div>
        <!-- navlink -->
        <h3 class="text-xl font-semibold text-white mb-1 font-roboto pl-4 pt-4">Menu</h3>
        <div class="">
          <a href="index.php" class="block px-4 py-2 font-medium transition text-white hover:bg-gray-300"> Home </a>
          <a href="shop.php" class="block px-4 py-2 font-medium transition text-white hover:bg-gray-300"> Shop </a>
          <a href="#" class="block px-4 py-2 font-medium transition text-white hover:bg-gray-300"> About Us </a>
          <roa href="#" class="block px-4 py-2 font-medium transition text-white hover:bg-gray-300"> Contact Us </roa>
        </div>
        <!-- navlinks end -->
      </div>
    </div>
    <!-- mobile sidebar menu end -->

    <!-- product view -->
    
    <?php
     $id_produk=$_GET['id'];
     $select = "SELECT kategori.kategori, kategori.id_kategori, produk.id_produk, produk.judul_produk, produk.tersedia, produk.revisi, produk.waktu_pengiriman, produk.harga_produk, produk.deskripsi_produk, produk.gambar_produk1, produk.gambar_produk2, produk.gambar_produk3, produk.detail_produk, produk.format_produk, freelance.id_freelance, freelance.nama_freelance, freelance.foto_Freelance
     FROM produk
     JOIN kategori ON (produk.id_kategori = kategori.id_kategori)
     JOIN freelance ON (freelance.id_kategori = kategori.id_kategori)
     WHERE produk.id_produk = '$id_produk'";

     
          
     $hasil = mysqli_query($conn,$select);
     if($hasil->num_rows > 0){
     while ($baris=$hasil->fetch_assoc()) {
         $kategori=$baris['kategori'];
         $produk=$baris['judul_produk'];
         $image=$baris['gambar_produk1'];
         $image1=$baris['gambar_produk2'];
         $image2=$baris['gambar_produk3'];
         $price=$baris['harga_produk'];
         $delivery=$baris['waktu_pengiriman'];
         $status=$baris['tersedia'];
         $revisi=$baris['revisi'];
         $deskripsi=$baris['deskripsi_produk'];
         $detail=$baris['detail_produk'];
         $format=$baris['format_produk'];
         echo"
      <!-- product image -->
      <form action='' method='POST'>
      <div class='container pt-48 pb-6 grid lg:grid-cols-2 gap-6'>
      <div>
        <div>
          <div id='default-carousel' class='relative w-full' data-carousel='slide'>
            <!-- Carousel wrapper -->
            <div class='relative w-full overflow-hidden rounded-lg md:h-96'>
              <!-- Item 1 -->
              <div class='hidden duration-700 ease-in-out' data-carousel-item>
                <img id='main-img' src='images/$image' class='absolute block w-full h-96 object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2' alt='...' />
              </div>
              <!-- Item 2 -->
              <div class='hidden duration-700 ease-in-out' data-carousel-item>
                <img id='main-img' src='images/$image1' class='absolute block w-full h-96 object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2' alt='...' />
              </div>
              <!-- Item 3 -->
              <div class='hidden duration-700 ease-in-out' data-carousel-item>
                <img id='main-img' src='images/$image2' class='absolute block w-full h-96 object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2' alt='...' />
              </div>
            </div>
            <!-- Slider indicators -->
            <div class='absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2'>
              <button type='button' class='w-3 h-3 rounded-full' aria-current='true' aria-label='Slide 1' data-carousel-slide-to='0'></button>
              <button type='button' class='w-3 h-3 rounded-full' aria-current='false' aria-label='Slide 2' data-carousel-slide-to='1'></button>
              <button type='button' class='w-3 h-3 rounded-full' aria-current='false' aria-label='Slide 3' data-carousel-slide-to='2'></button>
            </div>
            <!-- Slider controls -->
            <button type='button' class='absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none' data-carousel-prev>
              <span
                class='inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none'
              >
                <svg aria-hidden='true' class='w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800' fill='none' stroke='currentColor' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'>
                  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 19l-7-7 7-7'></path>
                </svg>
                <span class='sr-only'>Previous</span>
              </span>
            </button>
            <button type='button' class='absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none' data-carousel-next>
              <span
                class='inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none'
              >
                <svg aria-hidden='true' class='w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800' fill='none' stroke='currentColor' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'>
                  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 5l7 7-7 7'></path>
                </svg>
                <span class='sr-only'>Next</span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <!-- product image end -->
      
      <!-- product content -->
      <div>
        <h2 class='md:text-3xl text-2xl font-medium uppercase mb-4 text-white'>$produk</h2>
        <div class='space-y-4'>
          <p class='text-white font-semibold space-x-2'>
            <span>Availability: </span>
            <span class='text-green-600'>$status</span>
          </p>
          <p class='space-x-2'>
            <span class='text-white font-semibold'>Revision: </span>
            <span class='text-gray-200'>$revisi</span>
          </p>
          <p class='space-x-2'>
            <span class='text-white font-semibold'>Category: </span>
            <span class='text-gray-200'>$kategori</span>
          </p>
          <p class='space-x-2'>
            <span class='text-white font-semibold'>Delivery Time: </span>
            <span class='text-gray-200'>$delivery</span>
          </p>
        </div>
        <div class='mt-4 flex items-baseline gap-3'>
          <span class='text-primary font-semibold text-xl'>Rp. " . number_format($price, 0) . "</span>
        </div>
        ";
    $hasil = mysqli_query($conn, $select);
    if ($hasil->num_rows > 0) {
      echo "
        <p class='mt-4 mb-4 text-white'>$deskripsi</p>
        <h3 class='mb-5 text-lg font-medium text-white'>Choose Freelancer:</h3>
        <ul class='grid w-full gap-6 md:grid-cols-3'>
      ";
      while ($baris = $hasil->fetch_assoc()) {
        $freelance=$baris['nama_freelance'];
        $fotofreelance=$baris['foto_Freelance'];
        $id_freelance = $baris['id_freelance'];
        echo "
          <li>
            <input type='radio' id='$id_freelance'   name='freelance' value=$id_freelance class='hidden peer' />
            <label for='$id_freelance' class='inline-flex items-center justify-between w-full h-24 p-5 text-white bg-dark border border-gray-400 rounded-lg cursor-pointer peer-checked:border-primary peer-checked:text-primary hover:text-gray-200 hover:bg-gray-800'>
              <div class='block'>
                <div class='w-full text-base font-semibold'>$freelance</div>
                <a href='choose-freelance.php?id=$id_freelance' class='w-full text-sm hover:underline hover:text-primary'>View Detail</a>
              </div>
              <img src='images/$fotofreelance' alt='' class='w-10 h-10 object-cover rounded-full ml-3' />
            </label>
          </li>
        ";
      }
      echo "
        </ul>
      ";

        echo"
        <!-- add to cart button -->
        <div class='flex mt-6'>
        <button
        type='button'
        data-modal-target='checkout'
        data-modal-toggle='checkout'
        class='bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 text-white px-8 py-4 font-medium rounded uppercase hover:bg-transparent transition text-sm flex items-center'
        " . (!$loggedin ?"disabled onclick=\"alert('Silahkan login terlebih dahulu'); window.location.href = 'login.php';\"" : "") . "
        >
        checkout
      </button>
      ";
        }
      echo"
          <!-- Main modal -->
          <div id='checkout' tabindex='-1' aria-hidden='true' class='fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full'>
            <div class='relative w-full max-w-md max-h-full'>
              <!-- Modal content -->
              <div class='relative bg-darkest rounded-lg shadow'>
                <button 
                type='button'
                class='absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-dark hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center' data-modal-hide='checkout'>
                  <svg aria-hidden='true' class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'>
                    <path
                      fill-rule='evenodd'
                      d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z'
                      clip-rule='evenodd'
                    ></path>
                  </svg>
                  <span class='sr-only'>Close modal</span>
                </button>

                <!-- Modal header -->
                <div class='px-6 py-4 border-b border-gray-400 rounded-t'>
                  <h3 class='text-base font-semibold text-white lg:text-xl'>Choose payment</h3>
                </div>
                <!-- Modal body -->
                <div class='p-6'>
                  <p class='text-sm font-normal text-gray-200 dark:text-gray-400'>Connect with one of our available wallet providers or create a new one.</p>
                  <ul class='my-4 space-y-3'>
                    <li>
                      <input type='radio' id='payment1' name='payment' value='Ovo' class='hidden peer' />
                      <label
                        for='payment1'
                        class='inline-flex items-center justify-center w-full h-24 p-5 text-white bg-dark border border-gray-400 rounded-lg cursor-pointer peer-checked:border-primary peer-checked:text-primary hover:text-gray-200 hover:bg-gray-800'
                      >
                        <img src='images/ovo.png' alt='' class='h-10 ml-3' />
                      </label>
                    </li>
                    <li>
                      <input type='radio' id='payment2' name='payment' value='Gopay' class='hidden peer' />
                      <label
                        for='payment2'
                        class='inline-flex items-center justify-center w-full h-24 p-5 text-white bg-dark border border-gray-400 rounded-lg cursor-pointer peer-checked:border-primary peer-checked:text-primary hover:text-gray-200 hover:bg-gray-800'
                      >
                        <img src='images/gopay.png' alt='' class='h-10 ml-3' />
                      </label>
                    </li>
                    <li>
                      <input type='radio' id='payment3' name='payment' value='Mandiri' class='hidden peer' />
                      <label
                        for='payment3'
                        class='inline-flex items-center justify-center w-full h-24 p-5 text-white bg-dark border border-gray-400 rounded-lg cursor-pointer peer-checked:border-primary peer-checked:text-primary hover:text-gray-200 hover:bg-gray-800'
                      >
                        <img src='images/mandiri.png' alt='' class='h-10 ml-3' />
                      </label>
                    </li>
                    <li>
                      <input type='radio' id='payment4' name='payment' value='BCA' class='hidden peer' />
                      <label
                        for='payment4'
                        class='inline-flex items-center justify-center w-full h-24 p-5 text-white bg-dark border border-gray-400 rounded-lg cursor-pointer peer-checked:border-primary peer-checked:text-primary hover:text-gray-200 hover:bg-gray-800'
                      >
                        <img src='images/logobca.png' alt='' class='h-10 ml-3' />
                      </label>
                    </li>
                    <!-- confirmation -->
                    <li>
                      <button
                        data-modal-target='popup-modal'
                        data-modal-toggle='popup-modal'
                        class='block text-white bg-primary hover:bg-darkest focus:ring-4 focus:outline-none focus:ring-primary border border-primary hover:border-primary hover:text-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center'
                        type='button'
                      >
                        CHECKOUT
                      </button>
                      <div id='popup-modal' tabindex='-1' class='fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full'>
                        <div class='relative w-full max-w-md max-h-full'>
                          <div class='relative bg-darkest rounded-lg border border-gray-600 shadow'>
                            <button type='button' class='absolute top-3 right-2.5 text-white bg-transparent hover:bg-dark hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center' data-modal-hide='popup-modal'>
                              <svg aria-hidden='true' class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'>
                                <path
                                  fill-rule='evenodd'
                                  d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z'
                                  clip-rule='evenodd'
                                ></path>
                              </svg>
                              <span class='sr-only'>Close modal</span>
                            </button>
                            <div class='p-6 text-center'>
                              <img src='images/questionmark.png' alt='' class='mx-auto mb-4 w-14 h-14' />
                              <h3 class='mb-5 text-lg font-normal text-white'>Are you sure you want to checkout this product?</h3>
                              <button
                                data-modal-target='small-modal'
                                data-modal-toggle='small-modal'
                                type='submit'
                                name='bayar'
                                class='text-white bg-primary hover:bg-darkest border border-primary hover:border-primary hover:text-primary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2'
                              >
                                Yes, I'm sure
                              </button>
                              
                              <!-- order complete -->
                              <div id='small-modal' tabindex='-1' class='fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full'>
                                <div class='relative w-full max-w-md max-h-full'>
                                  <!-- Modal content -->
                                  <div class='relative bg-darkest py-8 rounded-lg shadow border border-gray-600'>
                                    <!-- Modal header -->
                                    <div class='mb-8'>
                                      <img src='images/icons/complete.png' class='w-16 inline-block animate-bounce' />
                                    </div>
                                    <h2 class='text-white font-medium text-xl mb-3'>YOUR ORDER IS COMPLETED!</h2>
                                    <p class='text-gray-200 text-sm px-5'>Thank you for your order! Your order is being processed and will be completed.</p>
                                    <div class='mt-10'>
                                      <a href='order-history_ongoing.php?id=$id_produk' class='bg-primary border border-primary text-white px-4 py-2 text-sm font-medium rounded-md uppercase hover:bg-transparent hover:text-primary transition text-center'
                                        >go to order history</a
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- order complete end -->
                              </form>
                              <button
                                data-modal-hide='popup-modal'
                                type='button'
                                class='text-white bg-red-500 hover:bg-darkest focus:ring-4 focus:outline-none focus:ring-red-500 rounded-lg border border-red-500 hover:border-red-500 text-sm font-medium px-5 py-2.5 hover:text-red-500 focus:z-10'
                              >
                                No, cancel
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- confirmation end -->
                  </ul>
        
                  <div>
                    <a href='#' class='inline-flex items-center text-xs font-normal text-gray-200 hover:underline dark:text-gray-400'>
                      <svg aria-hidden='true' class='w-3 h-3 mr-2' aria-hidden='true' focusable='false' data-prefix='far' data-icon='question-circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                        <path
                          fill='currentColor'
                          d='M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z'
                        ></path>
                      </svg>
                      Why do I need to connect with my wallet?</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- add to cart button end -->
      </div>
      <!-- product content end -->
    </div>
    <!-- product view end -->

    <!-- product details and review -->
    <div class='container pb-16'>
      <!-- detail buttons -->
      <h3 class='border-b border-gray-200 font-roboto text-white pb-3 text-xl font-medium'>Product Details</h3>
      <!-- details button end -->

      <!-- details content -->
      <div class='lg:w-4/5 xl:w-3/5 pt-6'>
        <div class='space-y-3 text-gray-200'>
          <p>
            $detail
          </p>
        </div>
        <!-- details table -->
        <table class='table-auto border-collapse w-full text-left text-gray-200 text-sm mt-6'>
          <tr>
            <th class='py-2 px-4 border border-gray-300 w-40 font-medium'>Revision</th>
            <td class='py-2 px-4 border border-gray-300'>$revisi</td>
          </tr>
          <tr>
            <th class='py-2 px-4 border border-gray-300 w-40 font-medium'>Delivery Time</th>
            <td class='py-2 px-4 border border-gray-300'>$delivery</td>
          </tr>
          <tr>
            <th class='py-2 px-4 border border-gray-300 w-40 font-medium'>File Format</th>
            <td class='py-2 px-4 border border-gray-300'>$format</td>
          </tr>
        </table>
        <!-- details table -->
      </div>
      <!-- details content end -->
    </div>
    <!-- product details and review end -->
    ";
  }}
  ?>
    

 <!-- product start  -->
<div class="container pt-16">
      <h2 class="text-2xl md:text-3xl font-medium text-white uppercase mb-6" data-aos="fade-up" data-aos-duration="500">Other Product</h2>
      <!-- grid start -->
      <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
        <!-- first product start-->
          <!-- product image start -->
          <?php
           $id_kategori=$_GET['id'];
           $select = "SELECT DISTINCT kategori.id_kategori, kategori.kategori, produk.id_produk, produk.judul_produk, produk.gambar_produk1, produk.harga_produk, produk.tersedia, AVG(rating_produk) AS avg_rating
           FROM kategori 
           JOIN produk ON kategori.id_kategori = produk.id_kategori
           LEFT JOIN `order` ON produk.id_produk = `order`.id_produk
           LEFT JOIN laris ON `order`.id_order = laris.id_order
           WHERE kategori.id_kategori='$id_kategori'
           GROUP BY produk.id_produk
           ";
           $hasil = mysqli_query($conn,$select);
           if($hasil->num_rows > 0){
           while ($baris=$hasil->fetch_assoc()) {
               $id_produk=$baris['id_produk'];
               $produk=$baris['judul_produk'];
               $image=$baris['gambar_produk1'];
               $price=$baris['harga_produk'];
               $status=$baris['tersedia'];
               $avg_rating = $baris['avg_rating'];
               echo"
               <div class='group rounded bg-dark shadow overflow-hidden' data-aos='fade-left' data-aos-duration='1000'>
          <div class='relative'>
            <img src='images/$image' class='w-full h-60 object-cover' />
            <div class='absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition'>
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class='pt-4 pb-3 px-4'>";
            if ($status == 'available') {
              echo "<a href='view.php?id=$id_produk'>
              ";
            }echo "
              <h4 class='font-medium text-xl mb-2 text-white hover:text-primary transition'>$produk</h4>
            </a>
            <div class='flex items-baseline mb-1'>
              <p class='text-xl text-primary font-roboto font-semibold'>Rp. " . number_format($price, 0) . "</p>
            </div>
            <div class='flex items-center'>
              <div class='flex gap-1 text-sm text-yellow-400'>
              <svg xmlns='http://www.w3.org/2000/svg' fill='' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' class='w-6 h-6 mr-2 text-yellow-300 fill-yellow-300'>
              <path
                stroke-linecap='round'
                stroke-linejoin='round'
                d='M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z'
              />
            </svg>
              </div>
              <p class='ml-2 mt-[2px] text-white font-semibold'>" . substr($avg_rating, 0,3). "</p>
            </div>
          </div>
          ";
                    if ($status == 'unavailable') {
                        echo "<h1 class='block w-full py-1 text-center text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50  transition'>$status</h1>";
                    }
                    echo "   
          <!-- product content end -->
          <!-- product button start -->
                ";
        if ($status == 'available') {
          echo "<a href='view.php?id=$id_produk' class='block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition'> CHECKOUT </a>";
       }
      //  product button end
        echo"
          </div>";
        }}
        ?>
        </div>
        <!-- first product end -->
      </div>
      <!-- grid end -->
    </div>
    <!-- product end -->

    <!-- footer start -->
    <footer class="bg-darkest pt-16 pb-12 mt-20 border-t border-gray-500" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
          <!-- footer left start -->
          <div class="space-y-8 xl:col-span-1">
            <img class="w-20" src="images/logo servizio.png" alt="Company name" />
            <p class="text-white text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, assumenda!</p>
            <div class="flex space-x-6">
              <a href="#" class="text-white hover:text-primary">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="text-white hover:text-primary">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="text-white hover:text-primary">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="text-white hover:text-primary">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
          <!-- footer left end -->
          <!-- footer links start -->
          <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
            <div class="md:grid md:grid-cols-2 md:gap-8">
              <div>
                <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Solutions</h3>
                <div class="mt-4 space-y-4">
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Marketing </a>
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Analytics </a>
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Commerce </a>
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Insights </a>
                </div>
              </div>
              <div class="mt-12 md:mt-0">
                <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Support</h3>
                <div class="mt-4 space-y-4">
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Pricing </a>
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Trust & Safety </a>
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Help & Support </a>
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Buying on Servizio </a>
                </div>
              </div>
            </div>
            <div class="md:grid md:grid-cols-2 md:gap-8">
              <div>
                <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Company</h3>
                <div class="mt-4 space-y-4">
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> About </a>
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Blog </a>
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Jobs </a>
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Careers </a>
                </div>
              </div>
              <div class="mt-12 md:mt-0">
                <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Legal</h3>
                <div class="mt-4 space-y-4">
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Claim </a>
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Privacy </a>
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Policy </a>
                  <a href="#" class="text-base text-gray-300 hover:text-primary block"> Terms </a>
                </div>
              </div>
            </div>
          </div>
          <!-- footer links end -->
        </div>
      </div>
    </footer>
    <!-- footer end -->

    <!-- copyright start -->
    <div class="bg-white py-4">
      <div class="container flex items-center justify-center">
        <p class="text-textcolor">© Servizio - All Rights Reserved</p>
      </div>
    </div>
    <!-- copyright end -->

    <script>
      let menuBar = document.querySelector('#menuBar');
      let mobileMenu = document.querySelector('#mobileMenu');
      let closeMenu = document.querySelector('#closeMenu');

      menuBar.addEventListener('click', function () {
        mobileMenu.classList.remove('hidden');
      });

      closeMenu.addEventListener('click', function () {
        mobileMenu.classList.add('hidden');
      });
    </script>

    <!-- carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <!-- carousel (end) -->

    <!-- scrolling -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- scrolling -->
  </body>
</html>
