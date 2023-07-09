<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../dist/output.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
  </head>
  <body class="bg-darkest font-poppins">
    <div class="min-h-screen bg-darkest font-poppins">
      <div class="h-16 bg-primary px-8 shadow-sm pl-8 lg:pl-80 pr-8 fixed w-full top-0 left-0 flex items-center">
        <!-- side rwd start -->
        <div class="w-6 cursor-pointer lg:hidden" id="ham">
          <svg class="text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </div>
        <!-- side rwd end -->

        <div class="ml-auto hidden lg:flex items-center">
          <div class="ml-4 relative">
            <div class="cursor-pointer">
              <img id="dropdown" class="h-8 w-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name=Admin&amp;background=FF2E63&amp;color=FFFFFF" alt="" />
            </div>

            <div id="dropdown_content" class="hidden absolute z-50 mt-2 rounded-md shadow-lg w-48 right-0 py-1 bg-dark">
              <div class="px-4 py-2 text-xs text-gray-200">Manage Account</div>
              <a href="#" class="block px-4 py-2 text-sm leading-5 text-white hover:bg-primary transition">Profile</a>
              <div class="border-t border-gray-700"></div>
              <a href="#" class="block px-4 py-2 text-sm leading-5 text-white hover:bg-primary transition">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <div class="fixed left-0 top-0 w-72 h-full bg-darkest shadow-2xl z-10 flex flex-col transition-all" id="sidebar">
        <div class="py-5 bg-primary flex justify-center relative">
          <img src="images/logo servizio.png" alt="" class="w-[84px]" />
          <svg id="sidebarClose" class="absolute block lg:hidden w-6 right-3 top-5 text-white cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>

        <div class="flex flex-col justify-between flex-grow">
          <div class="py-5">
            <a href="admin_dashboard.php" class="flex items-center my-1 px-4 py-3 text-white border-l-4 border-transparent hover:border-primary bg-darkest hover:bg-dark transition">
              <img src="images/dashboard.png" alt="" class="w-5 h-5 mr-5" />
              Dashboard
            </a>

            <a href="admin_orderList.php" class="flex items-center my-1 px-4 py-3 text-white border-l-4 border-transparent hover:border-primary bg-darkest hover:bg-dark transition">
              <img src="images/list.png" alt="" class="w-5 h-5 mr-5" />
              Order List
            </a>

            <a href="admin_orderReport.php" class="flex items-center my-1 px-3 py-3 text-white border-l-4 border-transparent hover:border-primary bg-darkest hover:bg-dark transition">
              <img src="images/report.png" alt="" class="w-7 h-7 mr-4" />
              Order Report
            </a>

            <a href="admin_manageFreelance.php" class="flex items-center my-1 px-4 py-3 text-white border-l-4 border-primary bg-dark">
              <img src="images/freelance.png" alt="" class="w-5 h-5 mr-5" />
              Manage Freelance
            </a>

            <a href="admin_manageProduct.php" class="flex items-center my-1 px-4 py-3 text-white border-l-4 border-transparent hover:border-primary bg-darkest hover:bg-dark transition">
              <img src="images/manage.png" alt="" class="w-5 h-5 mr-5" />
              Manage Product
            </a>

            <a href="#" class="flex lg:hidden items-center my-1 px-4 py-3 text-white border-l-4 border-transparent hover:border-primary bg-darkest hover:bg-dark transition">
              <img src="images/logout.png" alt="" class="w-5 h-5 mr-5" />
              Logout
            </a>
          </div>

          <div class="lg:hidden block">
            <div class="border-t border-gray-600 flex items-center py-4 px-5">
              <div class="cursor-pointer mr-4">
                <img class="h-8 w-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name=Admin&amp;background=FF2E63&amp;color=FFFFFF" alt="" />
              </div>
              <a href="#" class="text-white text-md capitalize">Admin</a>
            </div>
          </div>
        </div>
      </div>

      <div class="pt-24 pr-8 pl-8 lg:pl-80 bg-darkest">
        <div class="overflow-x-auto shadow-md sm:rounded-lg mb-8">
          <table class="w-full text-sm text-center text-white">
            <caption class="p-5 text-3xl font-semibold text-left text-white bg-dark">
              Our freelancer
              <p class="mt-3 mb-2 text-sm font-normal text-white">Embrace Your Creative Freedom and Elevate Your Business with our Seamless Freelance Services, Unlocking Your Full Potential and Enabling Success.</p>
              <div class="flex justify-between">
                <!-- <button
                  data-modal-target="addfreelancer"
                  data-modal-toggle="addfreelancer"
                  class="inline-flex items-center justify-center p-0.5 mt-4 mb-1 mr-2 text-sm font-medium text-white rounded-lg bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200"
                > -->
                  <span class="px-5 py-2.5 pr-7 flex items-center gap-4">
                    <!-- <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg> -->
                  </span>
                <!-- </button> -->
              
              <!-- Search Engine -->
              <form action="search_produk.php" method="GET">
                <div class="w-96 h-12 mt-3 xl:max-w-xl lg:max-w-lg lg:flex hidden">
                  <input type="text" name="produk" class="text-white bg-dark w-full border border-r-0 border-primary px-3 rounded-l-md focus:ring-primary focus:border-primary" placeholder="Search freelancer" />
                  <button
                    type="submit"
                    name="cari"
                    class="flex items-center bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 text-white px-5 font-medium text-base rounded-r-md"
                  >
                    Search
                  </button>
                
                </div>
                </Form>
              </div>
            </caption>
              <thead class="text-xs text-white uppercase bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50">
              <tr>
                <th scope="col" class="px-6 py-3">Product image</th>
                <th scope="col" class="px-6 py-3">product name</th>
                <th scope="col" class="px-6 py-3">Category</th>
                <th scope="col" class="px-6 py-3">Price</th>
                <th scope="col" class="px-6 py-3">Status</th>
                <th scope="col" class="px-6 py-3">Action</th>
              </tr>
            </thead>
<?php 

include 'connect.php';
      if(isset($_GET['cari'])){
        $value=$_GET['produk'];

        $search = "SELECT * FROM produk
                   JOIN kategori ON produk.id_kategori = kategori.id_kategori
                   WHERE produk.judul_produk LIKE '%$value%'";
        $hasil = mysqli_query($conn,$search);
           if($hasil->num_rows > 0){
           while ($baris=$hasil->fetch_assoc()) {
            $id_produk=$baris['id_produk'];
            $kategori=$baris['kategori'];
            $produk=$baris['judul_produk'];
            $price=$baris['harga_produk'];
            $image=$baris['gambar_produk1'];
            $status=$baris['tersedia'];
            echo"
            <tr class='bg-dark border-b border-gray-600'>
                <th scope='row' class='px-6 py-4 font-medium text-white whitespace-nowrap flex justify-center'><img class='w-36' src='images/$image' alt='' /></th>
                <td class='px-6 py-4'>$produk</td>
                <td class='px-6 py-4'>$kategori</td>
                <td class='px-6 py-4'>Rp. " . number_format($price, 0) . "</td>
                <td class='px-6 py-4'>$status</td>
                <td class='px-6 py-4'>
                  <a href= 'admin_edit_produk.php?id=$id_produk'>
                  <button
                    type='button'
                    name='edit_produk'
                    class='text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2'
                  >
                    <img class='w-6' src='images/edit.png' alt='' />
                  </button>
                  <a href= 'admin_delete_product.php?id_produk=$id_produk'>
                  <button
                    type='button'
                    class='text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2'
                  >
                    <img class='w-6' src='images/delete.png' alt='' />
                  </button>
                  </a>
                </td>
              </tr>
              ";
                }
        }else {
            echo "<script>alert('Produk Tidak Di Temukan.');</script>";

        }
            }
             ?>

</body>
</html>
