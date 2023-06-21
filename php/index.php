<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
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

    <!-- Additional required wrapper -->
    <div class="swiper">
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="bg-cover bg-center py-36  top-32 relative" style="background-image: url('images/banner.png')">
            <div class="container">
              <!-- banner content -->
              <h1 class="xl:text-5xl md:text-4xl text-3xl text-gray-800 font-medium mb-4">
                Find perfect <span class="text-primary">freelance</span> <br class="hidden sm:block" />
                <span class="text-primary">services</span> for your business
              </h1>
              <p class="text-base text-gray-600 leading-6">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt <br class="hidden sm:block" />
                voluptas aillo ab magni temporibus non totam inventore?
              </p>
              <!-- banner button -->
              <div class="mt-12">
                <a href="shop.php" class="bg-primary border border-primary text-white uppercase px-8 py-3 font-medium rounded-md hover:bg-transparent hover:text-primary transition"> Shop now </a>
              </div>
              <!-- banner button end -->
              <!-- banner content end -->
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="bg-cover bg-center py-36 top-32 relative" style="background-image: url('images/banner3.png')">
            <div class="container">
              <!-- banner content -->
              <h1 class="xl:text-5xl md:text-4xl text-3xl text-gray-800 font-medium mb-4">
                Find perfect <span class="text-[#FFC04D]">freelance</span> <br class="hidden sm:block" />
                <span class="text-[#FFC04D]">services</span> for your business
              </h1>
              <p class="text-base text-gray-600 leading-6">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt <br class="hidden sm:block" />
                voluptas aillo ab magni temporibus non totam inventore?
              </p>
              <!-- banner button -->
              <div class="mt-12">
                <a href="shop.php" class="bg-[#FFC04D] border border-[#FFB837] text-white uppercase px-8 py-3 font-medium rounded-md hover:bg-transparent hover:text-[#FFC04D] transition"> Shop now </a>
              </div>
              <!-- banner button end -->
              <!-- banner content end -->
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="bg-cover bg-center py-36 top-32 relative" style="background-image: url('images/banner4.png')">
            <div class="container">
              <!-- banner content -->
              <h1 class="xl:text-5xl md:text-4xl text-3xl text-gray-800 font-medium mb-4">
                Find perfect <span class="text-[#C36A83]">freelance</span> <br class="hidden sm:block" />
                <span class="text-[#C36A83]">services</span> for your business
              </h1>
              <p class="text-base text-gray-600 leading-6">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt <br class="hidden sm:block" />
                voluptas aillo ab magni temporibus non totam inventore?
              </p>
              <!-- banner button -->
              <div class="mt-12">
                <a href="shop.php" class="bg-[#C36A83] border border-[#A85A70] text-white uppercase px-8 py-3 font-medium rounded-md hover:bg-transparent hover:text-[#C36A83] transition"> Shop now </a>
              </div>
              <!-- banner button end -->
              <!-- banner content end -->
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="bg-cover bg-center py-36 top-32 relative" style="background-image: url('images/banner5.png')">
            <div class="container">
              <!-- banner content -->
              <h1 class="xl:text-5xl md:text-4xl text-3xl text-gray-800 font-medium mb-4">
                Find perfect <span class="text-[#246F90]">freelance</span> <br class="hidden sm:block" />
                <span class="text-[#246F90]">services</span> for your business
              </h1>
              <p class="text-base text-gray-600 leading-6">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt <br class="hidden sm:block" />
                voluptas aillo ab magni temporibus non totam inventore?
              </p>
              <!-- banner button -->
              <div class="mt-12">
                <a href="shop.php" class="bg-[#246F90] border border-[#1F5F7B] text-white uppercase px-8 py-3 font-medium rounded-md hover:bg-transparent hover:text-[#246F90] transition"> Shop now </a>
              </div>
              <!-- banner button end -->
              <!-- banner content end -->
            </div>
          </div>
        </div>
      </div>
    
    <!-- hero icon end -->

    <!-- categories -->
    <div class="container pt-48 ">
      <h2 class="text-2xl md:text-3xl text-white font-medium text-red uppercase mb-6"  >shop by category </h2>
      <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-3">
        <!-- first category start -->
        <div class="relative group rounded-sm overflow-hidden" >
          <img src="images/category/category-1.jpg" class="w-full" />
          <a href="#" class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white font-roboto font-medium tracking-wide transition"> Programming </a>
        </div>
        <!-- first category end -->
        <!-- second category start -->
        <div class="relative group rounded-sm overflow-hidden">
          <img src="images/category/category-5.jpg" class="w-full" />
          <a href="#" class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white font-roboto font-medium tracking-wide transition"> Video Editing </a>
        </div>
        <!-- second category end -->
        <!-- third category start -->
        <div class="relative group rounded-sm overflow-hidden">
          <img src="images/category/category-3.jpg" class="w-full" />
          <a href="#" class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white font-roboto font-medium tracking-wide transition"> Design Graphic </a>
        </div>
        <!-- third category end -->
        <!-- fourth category start -->
        <div class="relative group rounded-sm overflow-hidden" data-aos="fade-up" data-aos-duration="1000">
          <img src="images/category/category-4.jpg" class="w-full" />
          <a href="#" class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white font-roboto font-medium tracking-wide transition"> Digital Marketing </a>
        </div>
        <!-- fourth category end -->
        <!-- fifth category start -->
        <div class="relative group rounded-sm overflow-hidden" data-aos="fade-up" data-aos-duration="1500">
          <img src="images/category/category-2.jpg" class="w-full" />
          <a href="#" class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white font-roboto font-medium tracking-wide transition"> Music & Audio </a>
        </div>
        <!-- fifth category end -->
        <!-- sixth category start -->
        <div class="relative group rounded-sm overflow-hidden" data-aos="fade-up" data-aos-duration="2000">
          <img src="images/category/category-6.jpg" class="w-full" />
          <a href="#" class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white font-roboto font-medium tracking-wide transition"> Writing </a>
        </div>
        <!-- sixth category end -->
      </div>
    </div>
    <!-- categories end -->

    <!-- product start  -->
    <div class="container pt-16">
      <h2 class="text-2xl md:text-3xl font-medium text-white uppercase mb-6" data-aos="fade-up" data-aos-duration="500">new arrival</h2>
      <!-- grid start -->
      <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
        <!-- first product start-->
        <div class="group rounded bg-dark shadow overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
          <!-- product image start -->
          <div class="relative">
            <img src="images/products/product9.jpg" class="w-full" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">             
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class="pt-4 pb-3 px-4">
            <div class="flex justify-between">
              <a href="view.php">
                <h4 class="font-medium text-xl mb-2 text-white hover:text-primary transition">UI/UX Design</h4>
              </a>
              <h1 class="bg-red-500 bg-opacity-30 text-red-500 px-1 py-2  font-semibold rounded-md text-sm">Unavailable</h1>
            </div>
            
            <div class="flex items-baseline mb-1">
              <p class="text-xl text-primary font-roboto font-semibold">Rp. 500.000,00</p>
            </div>
            <div class="flex  items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-3 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <p class="mt-[2px] text-white font-semibold">4</p>
            </div>
            
          </div>
          <!-- product content end -->
          <!-- product button start -->
          <a href="view.php" class="block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition"> CHECKOUT </a>
          <!-- product button end -->
        </div>
        <!-- first product end -->

        <!-- second product start -->
        <div class="group rounded bg-dark shadow overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
          <!-- product image start -->
          <div class="relative">
            <img src="images/products/product9.jpg" class="w-full" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">             
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class="pt-4 pb-3 px-4">
            <a href="view.php">
              <h4 class="font-medium text-xl mb-2 text-white hover:text-primary transition">UI/UX Design</h4>
            </a>
            <div class="flex items-baseline mb-1">
              <p class="text-xl text-primary font-roboto font-semibold">Rp. 500.000,00</p>
            </div>
            <div class="flex  items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-3 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <p class="mt-[2px] text-white font-semibold">4</p>
            </div>
            
          </div>
          <!-- product content end -->
          <!-- product button start -->
          <a href="#" class="block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition"> CHECKOUT </a>
          <!-- product button end -->
        </div>
        <!-- second product end -->

        <!-- third product start -->
        <div class="group rounded bg-dark shadow overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
          <!-- product image start -->
          <div class="relative">
            <img src="images/products/product9.jpg" class="w-full" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">             
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class="pt-4 pb-3 px-4">
            <a href="view.php">
              <h4 class="font-medium text-xl mb-2 text-white hover:text-primary transition">UI/UX Design</h4>
            </a>
            <div class="flex items-baseline mb-1">
              <p class="text-xl text-primary font-roboto font-semibold">Rp. 500.000,00</p>
            </div>
            <div class="flex  items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-3 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <p class="mt-[2px] text-white font-semibold">4</p>
            </div>
            
          </div>
          <!-- product content end -->
          <!-- product button start -->
          <a href="#" class="block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition"> CHECKOUT </a>
          <!-- product button end -->
        </div>
        <!-- third product end -->

        <!-- fourth product start -->
        <div class="group rounded bg-dark shadow overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
          <!-- product image start -->
          <div class="relative">
            <img src="images/products/product9.jpg" class="w-full" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">             
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class="pt-4 pb-3 px-4">
            <a href="view.php">
              <h4 class="font-medium text-xl mb-2 text-white hover:text-primary transition">UI/UX Design</h4>
            </a>
            <div class="flex items-baseline mb-1">
              <p class="text-xl text-primary font-roboto font-semibold">Rp. 500.000,00</p>
            </div>
            <div class="flex  items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-3 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <p class="mt-[2px] text-white font-semibold">4</p>
            </div>
            
          </div>
          <!-- product content end -->
          <!-- product button start -->
          <a href="#" class="block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition"> CHECKOUT </a>
          <!-- product button end -->
        </div>
        <!-- fourth product end -->

        <!-- fifth product start-->
        <div class="group rounded bg-dark shadow overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
          <!-- product image start -->
          <div class="relative">
            <img src="images/products/product9.jpg" class="w-full" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">             
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class="pt-4 pb-3 px-4">
            <a href="view.php">
              <h4 class="font-medium text-xl mb-2 text-white hover:text-primary transition">UI/UX Design</h4>
            </a>
            <div class="flex items-baseline mb-1">
              <p class="text-xl text-primary font-roboto font-semibold">Rp. 500.000,00</p>
            </div>
            <div class="flex  items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-3 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <p class="mt-[2px] text-white font-semibold">4</p>
            </div>
            
          </div>
          <!-- product content end -->
          <!-- product button start -->
          <a href="#" class="block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition"> CHECKOUT </a>
          <!-- product button end -->
        </div>
        <!-- fifth product end -->

        <!-- sixth product start -->
        <div class="group rounded bg-dark shadow overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
          <!-- product image start -->
          <div class="relative">
            <img src="images/products/product9.jpg" class="w-full" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">             
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class="pt-4 pb-3 px-4">
            <a href="view.php">
              <h4 class="font-medium text-xl mb-2 text-white hover:text-primary transition">UI/UX Design</h4>
            </a>
            <div class="flex items-baseline mb-1">
              <p class="text-xl text-primary font-roboto font-semibold">Rp. 500.000,00</p>
            </div>
            <div class="flex  items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-3 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <p class="mt-[2px] text-white font-semibold">4</p>
            </div>
            
          </div>
          <!-- product content end -->
          <!-- product button start -->
          <a href="#" class="block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition"> CHECKOUT </a>
          <!-- product button end -->
        </div>
        <!-- sixth product end -->

        <!-- seventh product start -->
        <div class="group rounded bg-dark shadow overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
          <!-- product image start -->
          <div class="relative">
            <img src="images/products/product9.jpg" class="w-full" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">             
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class="pt-4 pb-3 px-4">
            <a href="view.php">
              <h4 class="font-medium text-xl mb-2 text-white hover:text-primary transition">UI/UX Design</h4>
            </a>
            <div class="flex items-baseline mb-1">
              <p class="text-xl text-primary font-roboto font-semibold">Rp. 500.000,00</p>
            </div>
            <div class="flex  items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-3 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <p class="mt-[2px] text-white font-semibold">4</p>
            </div>
            
          </div>
          <!-- product content end -->
          <!-- product button start -->
          <a href="#" class="block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition"> CHECKOUT </a>
          <!-- product button end -->
        </div>
        <!-- seventh product end -->

        <!-- eighth product start -->
        <div class="group rounded bg-dark shadow overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
          <!-- product image start -->
          <div class="relative">
            <img src="images/products/product9.jpg" class="w-full" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">             
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class="pt-4 pb-3 px-4">
            <a href="view.php">
              <h4 class="font-medium text-xl mb-2 text-white hover:text-primary transition">UI/UX Design</h4>
            </a>
            <div class="flex items-baseline mb-1">
              <p class="text-xl text-primary font-roboto font-semibold">Rp. 500.000,00</p>
            </div>
            <div class="flex  items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-3 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <p class="mt-[2px] text-white font-semibold">4</p>
            </div>
            
          </div>
          <!-- product content end -->
          <!-- product button start -->
          <a href="#" class="block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition"> CHECKOUT </a>
          <!-- product button end -->
        </div>
        <!-- eighth product end -->
      </div>
      <!-- grid end -->
    </div>
    <!-- product end -->

    <!-- banner start -->
    <div class="container pt-16" data-aos="fade-up" data-aos-duration="1000">
      <a href="#">
        <img src="images/banner2.png" class="w-full" />
      </a>
    </div>
    <!-- banner end -->

    <!-- product (recommended) start  -->
    <div class="container pt-16">
      <h2 class="text-2xl md:text-3xl font-medium text-white mb-6 uppercase" data-aos="fade-up" data-aos-duration="500">best selling</h2>
      <!-- grid start -->
      <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
        <!-- first product start-->
        <div class="group rounded bg-dark shadow overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
          <!-- product image start -->
          <div class="relative">
            <img src="images/products/product9.jpg" class="w-full" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">             
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class="pt-4 pb-3 px-4">
            <a href="view.php">
              <h4 class="font-medium text-xl mb-2 text-white hover:text-primary transition">UI/UX Design</h4>
            </a>
            <div class="flex items-baseline mb-1">
              <p class="text-xl text-primary font-roboto font-semibold">Rp. 500.000,00</p>
            </div>
            <div class="flex  items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-3 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <p class="mt-[2px] text-white font-semibold">4</p>
            </div>
            
          </div>
          <!-- product content end -->
          <!-- product button start -->
          <a href="#" class="block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition"> CHECKOUT </a>
          <!-- product button end -->
        </div>
        <!-- first product end -->

        <!-- second product start -->
        <div class="group rounded bg-dark shadow overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
          <!-- product image start -->
          <div class="relative">
            <img src="images/products/product9.jpg" class="w-full" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">             
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class="pt-4 pb-3 px-4">
            <a href="view.php">
              <h4 class="font-medium text-xl mb-2 text-white hover:text-primary transition">UI/UX Design</h4>
            </a>
            <div class="flex items-baseline mb-1">
              <p class="text-xl text-primary font-roboto font-semibold">Rp. 500.000,00</p>
            </div>
            <div class="flex  items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-3 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <p class="mt-[2px] text-white font-semibold">4</p>
            </div>
            
          </div>
          <!-- product content end -->
          <!-- product button start -->
          <a href="#" class="block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition"> CHECKOUT </a>
          <!-- product button end -->
        </div>
        <!-- second product end -->

        <!-- third product start -->
        <div class="group rounded bg-dark shadow overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
          <!-- product image start -->
          <div class="relative">
            <img src="images/products/product9.jpg" class="w-full" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">             
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class="pt-4 pb-3 px-4">
            <a href="view.php">
              <h4 class="font-medium text-xl mb-2 text-white hover:text-primary transition">UI/UX Design</h4>
            </a>
            <div class="flex items-baseline mb-1">
              <p class="text-xl text-primary font-roboto font-semibold">Rp. 500.000,00</p>
            </div>
            <div class="flex  items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-3 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <p class="mt-[2px] text-white font-semibold">4</p>
            </div>
            
          </div>
          <!-- product content end -->
          <!-- product button start -->
          <a href="#" class="block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition"> CHECKOUT </a>
          <!-- product button end -->
        </div>
        <!-- third product end -->

        <!-- fourth product start -->
        <div class="group rounded bg-dark shadow overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
          <!-- product image start -->
          <div class="relative">
            <img src="images/products/product9.jpg" class="w-full" />
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">             
            </div>
          </div>
          <!-- product image end -->
          <!-- product content start -->
          <div class="pt-4 pb-3 px-4">
            <a href="view.php">
              <h4 class="font-medium text-xl mb-2 text-white hover:text-primary transition">UI/UX Design</h4>
            </a>
            <div class="flex items-baseline mb-1">
              <p class="text-xl text-primary font-roboto font-semibold">Rp. 500.000,00</p>
            </div>
            <div class="flex  items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-1 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-3 text-yellow-300 fill-yellow-300">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                />
              </svg>
              <p class="mt-[2px] text-white font-semibold">4</p>
            </div>
            
          </div>
          <!-- product content end -->
          <!-- product button start -->
          <a href="#" class="block w-full py-1 text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50  transition"> CHECKOUT </a>
          <!-- product button end -->
        </div>
        <!-- fourth product end -->
      </div>
      <!-- grid end -->
    </div>
    <!-- product (recommended) end -->

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
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
      const swiper = new Swiper('.swiper', {
        // Optional parameters
        speed: 400,
        spaceBetween: 100,
        autoplay: {
          delay: 2000,
        },
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
          el: '.swiper-scrollbar',
        },
      });
    </script>
    <!-- carousel -->

    <!-- scrolling -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- scrolling -->
  </body>
</html>