<?php
include 'connect.php';

$id_freelance = $_GET['id'];
$var = "SELECT freelance.id_freelance ,freelance.nama_freelance, freelance.id_kategori, freelance.status_freelance, freelance.freelance_email,freelance.No_HP, freelance.foto_Freelance
FROM freelance WHERE freelance.id_freelance = '$id_freelance' ";
$hasil = $conn -> query($var);
while ($baris=mysqli_fetch_assoc($hasil)) {
    $id_freelance=$baris['id_freelance'];
    $nama_freelance=$baris['nama_freelance'];
    $status_freelance=$baris['status_freelance'];
    $No_HP=$baris['No_HP'];
    $freelance_email=$baris['freelance_email'];
    $message=$baris['message'];
    $image1=$baris['foto_Freelance'];
  
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

            <a href="logout.php" class="flex lg:hidden items-center my-1 px-4 py-3 text-white border-l-4 border-transparent hover:border-primary bg-darkest hover:bg-dark transition">
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
                          <!-- Modal content -->
                            <!-- Modal body -->
                            <?php
                            echo"
                            <div class='p-6 space-y-6'>
                              <form action='freelance.php' method='POST' enctype='multipart/form-data' class='h-screen'>
                                <h3 class='font-medium capitalize mb-4 text-white text-center text-2xl'>Edit Freelance</h3>
                                <div class='space-y-4'>
                                    <div class='mt-6'>
                                    <div class='hidden'>
                                    <label class='block text-white'></label>
                                    <input type='' name='id_freelance' value='$id_freelance' class='text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg lg:hidden/'>
                                    </div>
                                    </div>
                                  <div class='mt-6'>
                                    <label class='block text-white' for=''>nama_freelance </label>
                                    <input type='text' name='freelance_name' value='$nama_freelance' placeholder='$nama_freelance' class='text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg' />
                                  </div>
                      
                                  <div class='mt-6'>
                                    <label class='block text-white' for=''>Availability </label>
                                    <select name='status_f' id='avlbty' class='text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg'>
                                      <option value='$status_freelance' disabled selected>$status_freelance</option>
                                      <option value='Active'>Active</option>
                                      <option value='Nonactive'>Nonactive</option>
                                    </select>
                                  </div>";
                                  ?>
                      
                                  <div class='mt-6'>
                                    <label class='block text-white' for='categories'>Category</label>
                                    <select name='position' id='ctgry' class='text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg'>
                                    <option value='' disabled selected>Select a Category of Product</option>
                                    <?php
                                      $select = "SELECT * FROM kategori ";
                                      $hasil = mysqli_query($conn,$select);
                                      while ($baris=mysqli_fetch_assoc($hasil)) {
                                          $kategori= $baris['kategori'];
                                          $id_kategori=$baris['id_kategori'];
                                          echo"
                                          <option value='$id_kategori'>$kategori</option>";
                                      }
                                      ?>
                                    </select>
                                  </div>
                                  <?php
                                  echo"
                      
                                  <div class='space-y-4'>
                                    <div class='mt-6'>
                                      <label class='block text-white' for='freelance_phone'>No.HP Freelance </label>
                                      <input type='text' name='freelance_phone' value='$No_HP' placeholder='$No_HP' class='text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg' />
                                    </div>
                      
                                  <div class='mt-6'>
                                    <label class='block text-white' for='description'>Email Freelance </label>
                                    <input type='text' name='freelance_email' value='$freelance_email' placeholder='$freelance_email' class='text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg' />
                                  </div>
                                  <div class='mt-6'>
                                    <label class='block text-white' for='description'>message </label>
                                    <input type='text' name='message' value='$message' placeholder='$message' class='text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg' />
                                  </div>
                                  <div class='mt-6'>
                                    <label class='block text-white' for='productimage1'> Foto Freelance</label>
                                    <input
                                      type='file' name='image1' value='$image1'
                                      class='text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-sm file:mr-5 file:py-2 file:px-6 file:rounded file:border-0 file:text-sm file:font-medium file:bg-primary file:text-white hover:file:cursor-pointer hover:file:bg-dark hover:file:text-primary hover:file:border hover:file:border-white'
                                    />
                                  </div>
                      
                                </div>
                                <div class='mt-6 pb-8'>
                                  <button type='submit' class='px-6 py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium' name='edit_freelance'>Save change</button>
                                </div>
                              </form>
                            </div>";
                            ?>
                                        
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