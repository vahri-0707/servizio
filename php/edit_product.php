<?php
include 'connect.php';

$id_produk = $_GET['id'];
$var = "SELECT produk.id_produk ,produk.judul_produk, produk.tersedia, produk.revisi, produk.id_kategori, produk.waktu_pengiriman, produk.harga_produk, produk.deskripsi_produk, produk.gambar_produk1, produk.gambar_produk2, produk.gambar_produk3, produk.detail_produk, produk.format_produk  
FROM produk WHERE produk.id_produk = '$id_produk' ";
$hasil = $conn -> query($var);
while ($baris=mysqli_fetch_assoc($hasil)) {
  $produk= $baris['judul_produk'];
  $status=$baris['tersedia'];
  $revisi=$baris['revisi'];
  $waktu=$baris['waktu_pengiriman'];
  $price=$baris['harga_produk'];
  $deskripsi=$baris['deskripsi_produk'];
  $image1=$baris['gambar_produk1'];
  $image2=$baris['gambar_produk2'];
  $image3=$baris['gambar_produk3'];
  $detail=$baris['detail_produk'];
  $format=$baris['format_produk'];
  
}

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
      <div class="relative z-10">
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

      <!-- content start -->
      <div class="pt-24 pr-8 pl-8 lg:pl-80 bg-darkest">
        <div class="relative bg-dark rounded-lg shadow mb-8">
          <!-- Modal header -->
          <div class="flex items-center justify-center p-5 border-b border-gray-400 rounded-t">
            <h3 class="text-xl font-medium text-white">Add Product</h3>
          </div>
          <!-- Modal body -->
          <div class='p-6 space-y-6'>
          <form action='produk.php' method='POST' enctype='multipart/form-data' id='updateForm'>
            <div class='grid gap-6 mb-6 md:grid-cols-2'>
            <input type='hidden' name='id_produk' value='<?php echo $id_produk; ?>' />  
            <div>
                <label for='product_title' class='block mb-2 text-sm font-medium text-white'>Product Title</label>
                <input type='text' id='nama_produk' name='nama_produk' value='<?php echo $produk; ?>' class='bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5' placeholder='Insert product title' required />
              </div>
              <div>
                <label for='availability' class='block mb-2 text-sm font-medium text-white'>Availability</label>
                <select id='availability' name='status' class='bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5' placeholder='Doe' required>
                  <option value='<?php echo $status; ?>' disabled selected><?php echo $status; ?></option>
                  <option value='available'>Available</option>
                  <option value='unavailable'>Unavailable</option>
                </select>
              </div>
              <div>
                <label for='revision' class='block mb-2 text-sm font-medium text-white'>Revision</label>
                <select id='revision' name='revisi' class='bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5' placeholder='Doe' required>
                  <option value='<?php echo $revisi; ?>' disabled selected><?php echo $revisi; ?></option>
                  <option value='1 time'>1 Time</option>
                  <option value='2 times'>2 Times</option>
                  <option value='3 times'>3 Times</option>
                  <option value='4 times'>4 Times</option>
                  <option value='5 times'>5 Times</option>
                  <option value='6 times'>6 Times</option>
                </select>
              </div>
              <div>
                <label for='category' class='block mb-2 text-sm font-medium text-white'>Category</label>
                <select id='category' name='kategori' class='bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5' placeholder='Doe' required>
                  <option selected>Choose category</option>
                  <?php
                  $select = 'SELECT * FROM kategori ';
                  $hasil = mysqli_query($conn,$select);
                  while ($baris=mysqli_fetch_assoc($hasil)) {
                      $kategori= $baris['kategori'];
                      $id_kategori=$baris['id_kategori'];
                      if ($id_kategori == $kategori) {
                        echo "<option value='$id_kategori' selected>$kategori</option>";
                      } else {
                        echo "<option value='$id_kategori'>$kategori</option>";
                      }
                  }
                  ?>
                </select>
              </div>
              <div>
                <label for='delivery' class='block mb-2 text-sm font-medium text-white'>Delivery</label>
                <select id='delivery' name='delivery' class='bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5' placeholder='Doe' required>
                  <option value='<?php echo $waktu; ?>' disabled selected><?php echo $waktu; ?></option>
                  <option value='1 day'>1 Day</option>
                  <option value='2 days'>2 Days</option>
                  <option value='3 days'>3 Days</option>
                  <option value='4 days'>4 Days</option>
                  <option value='5 days'>5 Days</option>
                  <option value='6 days'>6 Days</option>
                </select>
              </div>
              <div>
                <label for='product_price' class='block mb-2 text-sm font-medium text-white'>Product Price</label>
                <input type='text' name='price' id='product_price' value='<?php echo $price; ?>' placeholder='$price' class='bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5' placeholder='Insert product price' required />
              </div>
              <div>
                <label for='product_format' class='block mb-2 text-sm font-medium text-white'>Product Format</label>
                <input type='text' name='format' id='product_format' value='<?php echo $format; ?>' placeholder='$format' class='bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5' placeholder='Insert product format' required />
              </div>
            </div>
            <div class='mb-6'>
              <label for='product_desc' class='block mb-2 text-sm font-medium text-white'>Product Description</label>
              <input type='text' name='deskripsi' id='product_desc' value='<?php echo $deskripsi; ?>' class='bg-dark border border-gray-400 text-white text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5' placeholder='Insert product description' required />
            </div>
            <div class='mb-6'>
              <label for='message' class='block mb-2 text-sm font-medium text-white'>Product Detail</label>
              <textarea
                id='message' name='detail' rows='4'
                class='block p-2.5 w-full text-sm bg-dark border border-gray-400 text-white rounded-lg focus:ring-primary focus:border-primary'
                placeholder='Write your product detail here...'
                required
              ><?php echo $detail; ?></textarea>
            </div>
            <div class='grid gap-3 mb-6 md:grid-cols-3'>
              <div>
                <label class='block mb-2 text-sm font-medium text-white' for='productimage1'>Upload Product Photos</label>
                <input class='block w-full text-sm text-white border border-gray-400 rounded-lg cursor-pointer bg-dark focus:outline-none' aria-describedby='file_input_help' id='file_input' type='file' name='image1' />
                <p class='mt-2 text-xs text-gray-500 dark:text-gray-300' id='file_input_help'>SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
              </div>
              <div>
                <label class='block mb-2 text-sm font-medium text-white' for='productimage2'>Upload Product Photos</label>
                <input class='block w-full text-sm text-white border border-gray-400 rounded-lg cursor-pointer bg-dark focus:outline-none' aria-describedby='file_input_help' id='file_input' type='file' name='image2' />
                <p class='mt-2 text-xs text-gray-500 dark:text-gray-300' id='file_input_help'>SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
              </div>
              <div>
                <label class='block mb-2 text-sm font-medium text-white' for='productimage3'>Upload Product Photos</label>
                <input class='block w-full text-sm text-white border border-gray-400 rounded-lg cursor-pointer bg-dark focus:outline-none' aria-describedby='file_input_help' id='file_input' type='file' name='image3' />
                <p class='mt-2 text-xs text-gray-500 dark:text-gray-300' id='file_input_help'>SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
              </div>
            </div>
            <div class='flex items-center justify-end'>
              <button type='submit' name='edit_produk' class='px-4 py-2 text-sm font-medium text-white bg-primary rounded-lg hover:bg-primary-dark focus:outline-none focus:bg-primary-dark' >Save Changes</button>
            </div>
          </form>
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
  </body>
</html>
