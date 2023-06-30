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

  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account Profile</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../dist/output.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
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
            <a href="account.php" class="block text-center text-white hover:text-primary transition">
              <div class="text-2xl">
                <i class="far fa-user"></i>
              </div>
              <div class="text-xs leading-3">Account</div>
            </a>
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
                <a href="#" class="px-6 py-3 flex items-center hover:bg-[#484F59] transition">
                  <img src="images/icons/programming.png" class="w-5 h-5 object-contain" />
                  <span class="ml-6 text-white text-xs">Programming</span>
                </a>
                <!-- first category end -->
                <!-- second category -->
                <a href="#" class="px-6 py-3 flex items-center hover:bg-[#484F59] transition">
                  <img src="images/icons/videoediting.png" class="w-5 h-5 object-contain" />
                  <span class="ml-6 text-white text-xs">Video Editing</span>
                </a>
                <!-- second category end -->
                <!-- third category -->
                <a href="#" class="px-6 py-3 flex items-center hover:bg-[#484F59] transition">
                  <img src="images/icons/graphicdesign.png" class="w-5 h-5 object-contain" />
                  <span class="ml-6 text-white text-xs">Design Graphic</span>
                </a>
                <!-- third category end -->
                <!-- fourth category -->
                <a href="#" class="px-6 py-3 flex items-center hover:bg-[#484F59] transition">
                  <img src="images/icons/digitalmarketing.png" class="w-5 h-5 object-contain" />
                  <span class="ml-6 text-white text-xs">Digital Marketing</span>
                </a>
                <!-- fourth category end -->
                <!-- fifth category -->
                <a href="#" class="px-6 py-3 flex items-center hover:bg-[#484F59] transition">
                  <img src="images/icons/musicaudio.png" class="w-5 h-5 object-contain" />
                  <span class="ml-6 text-white text-xs">Music & Audio</span>
                </a>
                <!-- fifth category end -->
                <!-- sixth category -->
                <a href="#" class="px-6 py-3 flex items-center hover:bg-[#484F59] transition">
                  <img src="images/icons//writing.png" class="w-5 h-5 object-contain" />
                  <span class="ml-6 text-white text-xs">Writing</span>
                </a>
                <!-- sixth category end -->
              </div>
            </div>

<<<<<<< HEAD
        <!-- link navbar menu start -->
        <div class="flex items-center justify-between flex-grow pl-12">
          <div class="flex items-center space-x-14 text-base capitalize">
            <a href="index.php" class="text-textcolor hover:text-primary transition">Home</a>
            <a href="shop.php" class="text-textcolor hover:text-primary transition">Shop</a>
            <a href="#" class="text-textcolor hover:text-primary transition">About us</a>
            <a href="#" class="text-textcolor hover:text-primary transition">Contact us</a>
=======
            <!-- link navbar menu start -->
            <div class="flex items-center justify-between flex-grow pl-12">
              <div class="flex items-center space-x-14 text-base capitalize">
                <a href="index.php" class="text-textcolor hover:text-primary transition">Home</a>
                <a href="shop.php" class="text-textcolor hover:text-primary transition">Shop</a>
                <a href="#" class="text-textcolor hover:text-primary transition">About us</a>
                <a href="#" class="text-textcolor hover:text-primary transition">Contact us</a>
              </div>
              <a href="login.php" class="ml-auto justify-self-end text-textcolor hover:text-primary transition"> Register/Login </a>
            </div>
>>>>>>> d171e3735edb720ae22a57c1dda1a34326c4ee23
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
      <!-- navbar end -->
    </nav>

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

    <!-- account wrapper -->
    <div class="container lg:grid grid-cols-12 items-start gap-6 pt-52">
      <!-- sidebar -->
      <div class="col-span-3">
        <!-- account profile -->
        <div class="px-4 py-3 shadow flex items-center gap-4 bg-dark">
          <div class="flex-shrink-0">
            <img src="images/avataruser.png" class="rounded-full w-14 h-14 p-1 border border-gray-200 object-cover" />
          </div>
          <div>
            <h4 class="text-white capitalize font-medium"><?php echo "Hello, <b>" . $_SESSION['first_name']. "</b>"; ?></h4>
          </div>
        </div>
        <!-- account profile end -->

        <!-- profile links -->
        <div class="mt-6 bg-dark shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600">
          <!-- single link -->
          <div class="space-y-1 pl-8">
            <a href="account.php" class="relative text-base font-medium capitalize hover:text-primary transition block text-white">
              Manage account
              <span class="absolute -left-8 top-0 text-base text-white">
                <i class="far fa-address-card"></i>
              </span>
            </a>
          </div>
          <!-- single link end -->
          <!-- single link -->
          <div class="space-y-1 pl-8 pt-4">
            <a href="order-history.php" class="relative medium capitalize text-primary font-medium hover:text-primary transition block">
              My order history
              <span class="absolute -left-8 top-0 text-base text-white">
                <i class="fas fa-gift"></i>
              </span>
            </a>
          </div>
          <!-- single link end -->
          <!-- single link -->
          <div class="pl-8 pt-4">
            <a href="wishlist.php" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
              delete account
              <span class="absolute -left-8 top-0 text-base text-white">
                <i class="fas fa-trash"></i>
              </span>
            </a>
          </div>
          <!-- single link end -->
          <!-- single link -->
          <div class="pl-8 pt-4">
            <a href="#" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
              logout
              <span class="absolute -left-8 top-0 text-base text-white">
                <i class="fas fa-sign-out-alt"></i>
              </span>
            </a>
          </div>
          <!-- single link end -->
        </div>
        <!-- profile links end -->
      </div>
      <!-- sidebar end -->

      <!-- account content -->
      <div class="col-span-9 shadow rounded px-6 pt-5 pb-7 mt-6 lg:mt-0 p-5 bg-dark">
        <h3 class="font-medium capitalize mb-4 text-white text-center text-2xl">Order History</h3>
        <div class="flex items-center mb-4 gap-3">
          <h1 class="text-base font-semibold text-white flex mr-2">Status</h1>
          <div
            type="button"
            class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center h-full"
          >
            Completed
          </div>

          <a
            href="order-history_ongoing.php"
            class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50"
          >
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-dark rounded-md group-hover:bg-opacity-0"> Ongoing </span>
          </a>
        </div>
        <div class="overflow-auto rounded-lg shadow hidden md:block">
          <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-center text-white">
              <thead class="text-xs text-white uppercase bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50">
                <tr>
                  <th scope="col" class="px-6 py-3">Product image</th>
                  <th scope="col" class="px-6 py-3">product name</th>
                  <th scope="col" class="px-6 py-3">Category</th>
                  <th scope="col" class="px-6 py-3">Price</th>
                  <th scope="col" class="px-6 py-3">freelancer</th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-dark border-b border-gray-600">
                <?php
        if ($loggedin) {
            $query = "SELECT `order`.id_order, order.status_order, produk.id_produk, produk.judul_produk, produk.gambar_produk1, produk.harga_produk, kategori.kategori, freelance.nama_freelance
                      FROM `order`
                      INNER JOIN produk ON `order`.id_produk = produk.id_produk
                      INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori
                      INNER JOIN freelance ON `order`.id_freelance = freelance.id_freelance
                      WHERE `order`.id_user = '$userId' AND `order`.status_proses = 'Completed'";

            $hasil = $conn->query($query);
            if ($hasil->num_rows > 0) {
                while ($baris = $hasil->fetch_assoc()) {
                    $id_order = $baris['id_order'];
                    $produk = $baris['judul_produk'];
                    $image = $baris['gambar_produk1'];
                    $price = $baris['harga_produk'];
                    $kategori = $baris['kategori'];
                    $id_produk = $baris['id_produk'];
                    $namafreelance = $baris['nama_freelance'];
                    $status = $baris['status_order'];
                    echo "
                
                  <th scope='row' class='px-6 py-4 font-medium text-white whitespace-nowrap flex justify-center'><img class='w-36' src='images/$image' alt='' /></th>
                  <td class='px-6 py-4'>$produk</td>
                  <td class='px-6 py-4'>$kategori</td>
                  <td class='px-6 py-4'>Rp. " . number_format($price, 0) . "</td>
                  <td class='px-6 py-4'>$namafreelance</td>
                </tr>
                ";}}}
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- account content end -->
    </div>
    <!-- account wrapper end -->

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

    <!-- scrolling -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- scrolling -->
  </body>
</html>
