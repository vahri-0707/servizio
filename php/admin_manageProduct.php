<?php
include 'connect.php';
?>

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

            <a href="admin_manageFreelance.php" class="flex items-center my-1 px-4 py-3 text-white border-l-4 border-transparent hover:border-primary bg-darkest hover:bg-dark transition">
              <img src="images/freelance.png" alt="" class="w-5 h-5 mr-5" />
              Manage Freelance
            </a>

            <a href="admin_manageProduct.php" class="flex items-center my-1 px-4 py-3 text-white border-l-4 border-primary bg-dark">
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

      <!-- content start -->
      <div class="pt-24 pr-8 pl-8 lg:pl-80 bg-darkest">
        <div class="overflow-x-auto shadow-md sm:rounded-lg mb-8">
          <table class="w-full text-sm text-center text-white">
            <caption class="p-5 text-3xl font-semibold text-left text-white bg-dark">
              Our products
              <p class="mt-3 mb-2 text-sm font-normal text-white">Embrace Your Creative Freedom and Elevate Your Business with our Seamless Freelance Services, Unlocking Your Full Potential and Enabling Success.</p>
              <div class="flex justify-between">
                <button
                  data-modal-target="addproduct"
                  data-modal-toggle="addproduct"
                  class="inline-flex items-center justify-center p-0.5 mt-4 mb-1 mr-2 text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200"
                >
                  <span class="px-5 py-2.5 pr-7 flex items-center gap-4">
                    <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add Product
                  </span>
                </button>
                <div id="addproduct" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative w-full max-w-4xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-darkest rounded-lg shadow">
                      <!-- Modal header -->
                      <div class="flex items-center justify-between p-5 border-b border-gray-400 rounded-t">
                        <h3 class="text-xl font-medium text-white">Add product</h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-600 hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="addproduct">
                          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                              fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-6 space-y-6">
                        <form action="product.php" method="POST" enctype="multipart/form-data">
                          <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                              <label for="product_title" class="block mb-2 text-sm font-medium text-white">Product Title</label>
                              <input
                                type="text"
                                id="product_title"
                                name="nama_produk"
                                class="bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Insert product title"
                                required
                              />
                            </div>
                            <div>
                              <label for="availability" class="block mb-2 text-sm font-medium text-white">Availability</label>
                              <select id="availability" name="status" class="bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="Doe" required>
                                <option selected>Choose an availability</option>
                                <option value="avail">Available</option>
                                <option value="nonavail">Unavailable</option>
                              </select>
                            </div>
                            <div>
                              <label for="revision" class="block mb-2 text-sm font-medium text-white">Revision</label>
                              <select id="revision" name="revisi" class="bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="Doe" required>
                                <option selected>Choose a revision times</option>
                                <option value="1time">1 Time</option>
                                <option value="2times">2 Times</option>
                                <option value="3times">3 Times</option>
                                <option value="4times">4 Times</option>
                                <option value="5times">5 Times</option>
                                <option value="6times">6 Times</option>
                              </select>
                            </div>
                            <div>
                              <label for="category" class="block mb-2 text-sm font-medium text-white">Category</label>
                              <select id="category" name="kategori" class="bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="Doe" required>
                                <option selected>Choose a revision times</option>
                                <option value="programming">Programming</option>
                                <option value="videoediting">Video Editing</option>
                                <option value="designgraphic">Design Graphic</option>
                                <option value="digitalmarketing">Digital Marketing</option>
                                <option value="musicaudio">Music & Audio</option>
                                <option value="writing">Writing</option>
                              </select>
                            </div>
                            <div>
                              <label for="delivery" class="block mb-2 text-sm font-medium text-white">Delivery</label>
                              <select id="delivery" name="delivery" class="bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="Doe" required>
                                <option selected>Choose a delivery times</option>
                                <option value="1day">1 Day</option>
                                <option value="2days">2 Days</option>
                                <option value="3days">3 Days</option>
                                <option value="4days">4 Days</option>
                                <option value="5days">5 Days</option>
                                <option value="6days">6 Days</option>
                              </select>
                            </div>
                            <div>
                              <label for="freelance" class="block mb-2 text-sm font-medium text-white">Freelance</label>
                              <select id="freelance" name="freelance_name"class="bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="Doe" required>
                                <option selected>Choose a freelancer</option>
                                <option value="freelancer1">Vahri</option>
                                <option value="freelancer2">Maul</option>
                                <option value="freelancer3">Fajar</option>
                                <option value="freelancer4">Raysid</option>
                                <option value="freelancer5">Mayla</option>
                              </select>
                            </div>
                            <div>
                              <label for="product_price" class="block mb-2 text-sm font-medium text-white">Product Price</label>
                              <input
                                type="text"
                                id="product_price"
                                name="price"
                                class="bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Insert product price"
                                required
                              />
                            </div>
                            <div>
                              <label for="product_format" class="block mb-2 text-sm font-medium text-white">Product Format</label>
                              <input
                                type="text"
                                id="product_format"
                                name="format"
                                class="bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Insert product format"
                                required
                              />
                            </div>
                          </div>
                          <div class="mb-6">
                            <label for="product_desc" class="block mb-2 text-sm font-medium text-white">Product Description</label>
                            <input
                              type="text"
                              id="product_desc"
                              name="deskripsi"
                              class="bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                              placeholder="Insert product description"
                              required
                            />
                          </div>
                          <div class="mb-6">
                            <label for="message" class="block mb-2 text-sm font-medium text-white">Product Detail</label>
                            <textarea
                              id="message"
                              name="detail"
                              rows="4"
                              class="block p-2.5 w-full text-sm bg-dark border border-gray-400 text-white rounded-lg focus:ring-primary focus:border-primary"
                              placeholder="Write your product detail here..."
                              required
                            ></textarea>
                          </div>
                          <div class="grid gap-3 mb-6 md:grid-cols-3">
                            <div>
                              <label class="block mb-2 text-sm font-medium text-white" for="photo1">Upload Product Photos</label>
                              <input class="block w-full text-sm text-white border border-gray-400 rounded-lg cursor-pointer bg-dark focus:outline-none" aria-describedby="file_input_help" id="file_input" type="file" name="image1" required />
                              <p class="mt-2 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                            </div>
                            <div>
                              <label class="block mb-2 text-sm font-medium text-white" for="photo2">Upload Product Photos</label>
                              <input class="block w-full text-sm text-white border border-gray-400 rounded-lg cursor-pointer bg-dark focus:outline-none" aria-describedby="file_input_help" id="file_input" type="file" name="image2" required />
                              <p class="mt-2 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                            </div>
                            <div>
                              <label class="block mb-2 text-sm font-medium text-white" for="photo2">Upload Product Photos</label>
                              <input class="block w-full text-sm text-white border border-gray-400 rounded-lg cursor-pointer bg-dark focus:outline-none" aria-describedby="file_input_help" id="file_input" name="image3" type="file" required />
                              <p class="mt-2 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                            </div>
                          </div>
                          <div class="flex items-center justify-center p-6 space-x-2 border-t border-gray-400 rounded-b">
                        <button
                          data-modal-hide="addproduct"
                          type="submit "
                          name="insert_produk"
                          class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-12 py-2.5 text-center"
                        >
                          Save Changes
                        </button>
                      </div>
                        </form>
                      </div>
                      <!-- Modal footer -->
                      <!-- <div class="flex items-center justify-center p-6 space-x-2 border-t border-gray-400 rounded-b">
                        <button
                          data-modal-hide="addproduct"
                          type="submit "
                          name="insert_produk"
                          class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-12 py-2.5 text-center"
                        >
                          Save Changes
                        </button>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="w-96 h-12 mt-3 xl:max-w-xl lg:max-w-lg lg:flex hidden">
                  <input type="text" class="text-white bg-dark w-full border border-r-0 border-primary px-3 rounded-l-md focus:ring-primary focus:border-primary" placeholder="Search products" />
                  <button
                    type="submit"
                    class="flex items-center bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 text-white px-5 font-medium text-base rounded-r-md transition"
                  >
                    Search
                  </button>
                </div>
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
            <tbody>
              <!-- view -->
              <?php
                $select = "SELECT * FROM produk p JOIN kategori k on p.id_kategori=k.id_kategori";
                $hasil = mysqli_query($conn,$select);
                if($hasil->num_rows > 0){
                while ($baris=$hasil->fetch_assoc()) {
                    $id_produk=$baris['id_produk'];
                    $produk=$baris['judul_produk'];
                    $kategori =$baris['kategori'];
                    $image=$baris['gambar_produk1'];
                    $price=$baris['harga_produk'];
                    $status=$baris['tersedia'];
                    echo"
              <tr class='bg-dark border-b border-gray-600'>
                <th scope='row' class='px-6 py-4 font-medium text-white whitespace-nowrap flex justify-center'><img class='w-36' src='images/product1.jpg' alt='' /></th>
                <td class='px-6 py-4'>$produk</td>
                <td class='px-6 py-4'>$kategori</td>
                <td class='px-6 py-4'>$price</td>
                <td class='px-6 py-4'>$status</td>
                <td class='px-6 py-4'>
                  <button
                    data-modal-target='addproduct'
                    data-modal-toggle='addproduct'
                    type='button'
                    class='text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2'
                  >
                    <img class='w-6' src='images/edit.png' alt='' />
                  </button>
                  <button
                    type='button'
                    class='text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2'
                  >
                    <img class='w-6' src='images/delete.png' alt='' />
                  </button>
                </td>
              </tr>
              ";
     }}
     ?>
              <!-- <tr class="bg-dark border-b border-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap flex justify-center"><img class="w-36" src="images/product1.jpg" alt="" /></th>
                <td class="px-6 py-4">Web Design</td>
                <td class="px-6 py-4">Programming</td>
                <td class="px-6 py-4">Rp.1.500.000</td>
                <td class="px-6 py-4">Available</td>
                <td class="px-6 py-4">
                  <button
                    data-modal-target="addproduct"
                    data-modal-toggle="addproduct"
                    type="button"
                    class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/edit.png" alt="" />
                  </button>
                  <button
                    type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/delete.png" alt="" />
                  </button>
                </td>
              </tr>
              <tr class="bg-dark border-b border-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap flex justify-center"><img class="w-36" src="images/product1.jpg" alt="" /></th>
                <td class="px-6 py-4">Web Design</td>
                <td class="px-6 py-4">Programming</td>
                <td class="px-6 py-4">Rp.1.500.000</td>
                <td class="px-6 py-4">Available</td>
                <td class="px-6 py-4">
                  <button
                    data-modal-target="addproduct"
                    data-modal-toggle="addproduct"
                    type="button"
                    class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/edit.png" alt="" />
                  </button>
                  <button
                    type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/delete.png" alt="" />
                  </button>
                </td>
              </tr>
              <tr class="bg-dark border-b border-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap flex justify-center"><img class="w-36" src="images/product1.jpg" alt="" /></th>
                <td class="px-6 py-4">Web Design</td>
                <td class="px-6 py-4">Programming</td>
                <td class="px-6 py-4">Rp.1.500.000</td>
                <td class="px-6 py-4">Available</td>
                <td class="px-6 py-4">
                  <button
                    data-modal-target="addproduct"
                    data-modal-toggle="addproduct"
                    type="button"
                    class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/edit.png" alt="" />
                  </button>
                  <button
                    type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/delete.png" alt="" />
                  </button>
                </td>
              </tr>
              <tr class="bg-dark border-b border-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap flex justify-center"><img class="w-36" src="images/product1.jpg" alt="" /></th>
                <td class="px-6 py-4">Web Design</td>
                <td class="px-6 py-4">Programming</td>
                <td class="px-6 py-4">Rp.1.500.000</td>
                <td class="px-6 py-4">Available</td>
                <td class="px-6 py-4">
                  <button
                    data-modal-target="addproduct"
                    data-modal-toggle="addproduct"
                    type="button"
                    class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/edit.png" alt="" />
                  </button>
                  <button
                    type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/delete.png" alt="" />
                  </button>
                </td>
              </tr>
              <tr class="bg-dark border-b border-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap flex justify-center"><img class="w-36" src="images/product1.jpg" alt="" /></th>
                <td class="px-6 py-4">Web Design</td>
                <td class="px-6 py-4">Programming</td>
                <td class="px-6 py-4">Rp.1.500.000</td>
                <td class="px-6 py-4">Available</td>
                <td class="px-6 py-4">
                  <button
                    data-modal-target="addproduct"
                    data-modal-toggle="addproduct"
                    type="button"
                    class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/edit.png" alt="" />
                  </button>
                  <button
                    type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/delete.png" alt="" />
                  </button>
                </td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>
      <!-- content end -->
    </div>

    <script>
      document.getElementById('dropdown').addEventListener('click', function () {
        document.getElementById('dropdown_content').classList.toggle('hidden');
      });

      document.getElementById('ham').addEventListener('click', function () {
        document.getElementById('sidebar').classList.add('active');
      });

      document.getElementById('sidebarClose').addEventListener('click', function () {
        document.getElementById('sidebar').classList.remove('active');
      });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  </body>
</html>
