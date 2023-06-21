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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <style>
      @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
      @import url(https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css);
    </style>
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
            <a href="admin_dashboard.php" class="flex items-center my-1 px-4 py-3 text-white border-l-4 border-primary bg-dark">
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
        <div class="mb-10">
          <div>
            <!-- order list -->
            <div class="grid lg:grid-cols-3 gap-4 mb-4 md:grid-cols-1">
              <div class="inline-flex items-center h-24 rounded-lg bg-dark">
                <div class="bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 rounded-l-lg h-full w-24 mr-6 flex items-center justify-center"><img src="images/accepted.png" alt="" class="w-12" /></div>
                <h1 class="text-white text-lg font-bold"><span>10</span> ORDER CONFIRMED</h1>
              </div>
              <div class="inline-flex items-center h-24 rounded-lg bg-dark">
                <div class="bg-gradient-to-r from-red-400 via-red-500 to-red-600 rounded-l-lg h-full w-24 mr-6 flex items-center justify-center"><img src="images/reject.png" alt="" class="w-12" /></div>
                <h1 class="text-white text-lg font-bold"><span>10</span> ORDER REJECTED</h1>
              </div>
              <div class="inline-flex items-center h-24 rounded-lg bg-dark">
                <div class="bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 rounded-l-lg h-full w-24 mr-6 flex items-center justify-center"><img src="images/done.png" alt="" class="w-12" /></div>
                <h1 class="text-white text-lg font-bold"><span>10</span> ORDER COMPLETED</h1>
              </div>
            </div>
            <!-- order list end -->

            <!-- chart -->
            <div class="grid grid-cols-3 grid-flow-row-dense gap-4 mb-4">
              <div class="flex items-center justify-center rounded-lg bg-dark lg:h-full lg:col-span-2 lg:row-span-3 col-span-3 h-60">
                <div class="h-full w-full px-5 py-5">
                  <h1 class="flex justify-center text-white text-xl font-semibold mb-2">Pendapatan Tahun 2023</h1>
                  <canvas class="h-full" id="line-chart"></canvas>
                </div>
              </div>
              <div class="md:block items-center rounded-lg bg-dark h-full md:col-span-1 col-span-3">
                <div class="text-lg text-white font-medium mb-1">Pendapatan hari ini</div>
                <div class="text-2xl text-primary font-bold">Rp.150.000</div>
              </div>
              <div class="md:block items-center rounded-lg bg-dark h-full md:col-span-1 col-span-3">
                <div class="text-lg text-white font-medium mb-1">Pendapatan hari ini</div>
                <div class="text-2xl text-primary font-bold">Rp.150.000</div>
              </div>
              <div class="md:block items-center rounded-lg bg-dark h-full md:col-span-1 col-span-3">
                <div class="text-lg text-white font-medium mb-1">Pendapatan hari ini</div>
                <div class="text-2xl text-primary font-bold">Rp.150.000</div>
              </div>
            </div>

            <!-- chart end -->

            <div class="grid grid-cols-2 grid-flow-row-dense gap-4">
              <!-- best freelance -->
              <div class="bg-dark py-5 px-5 md:col-span-1 col-span-3 h-96 overflow-y-scroll rounded-lg">
                <div class="shadow-md sm:rounded-lg mb-8">
                  <h1 class="flex justify-center text-2xl mb-3 font-bold text-white">Best Freelancer</h1>
                  <table class="w-full text-sm text-center text-white">
                    <thead class="text-xs text-white uppercase bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50">
                      <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Position</th>
                        <th scope="col" class="px-6 py-3">rating</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="bg-dark border-b">
                        <td class="px-6 py-4">1</td>
                        <td class="flex items-center justify-center py-4 text-white">
                          <img class="w-7 h-7 object-cover rounded-full" src="images/freelance.jpg" alt="Jese image" />
                          <div class="pl-3">
                            <div class="text-sm font-semibold">Maulana</div>
                            <div class="font-normal text-gray-400">maul@gmail.com</div>
                          </div>
                        </td>
                        <td class="px-6 py-4">Programming</td>
                        <td class="px-6 py-4">
                          <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 mr-2 text-yellow-300 fill-yellow-300">
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                              />
                            </svg>
                            <p class="mt-[2px]">4</p>
                          </div>
                        </td>
                      </tr>
                      <tr class="bg-dark border-b">
                        <td class="px-6 py-4">1</td>
                        <td class="flex items-center justify-center py-4 text-white">
                          <img class="w-7 h-7 object-cover rounded-full" src="images/freelance.jpg" alt="Jese image" />
                          <div class="pl-3">
                            <div class="text-sm font-semibold">Maulana</div>
                            <div class="font-normal text-gray-400">maul@gmail.com</div>
                          </div>
                        </td>
                        <td class="px-6 py-4">Programming</td>
                        <td class="px-6 py-4">
                          <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 mr-2 text-yellow-300 fill-yellow-300">
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                              />
                            </svg>
                            <p class="mt-[2px]">4</p>
                          </div>
                        </td>
                      </tr>
                      <tr class="bg-dark border-b">
                        <td class="px-6 py-4">1</td>
                        <td class="flex items-center justify-center py-4 text-white">
                          <img class="w-7 h-7 object-cover rounded-full" src="images/freelance.jpg" alt="Jese image" />
                          <div class="pl-3">
                            <div class="text-sm font-semibold">Maulana</div>
                            <div class="font-normal text-gray-400">maul@gmail.com</div>
                          </div>
                        </td>
                        <td class="px-6 py-4">Programming</td>
                        <td class="px-6 py-4">
                          <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 mr-2 text-yellow-300 fill-yellow-300">
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                              />
                            </svg>
                            <p class="mt-[2px]">4</p>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- best freelance end -->

              <!-- best product -->
              <div class="bg-dark py-5 px-5 md:col-span-1 rounded-lg col-span-3 h-96 overflow-y-scroll">
                <div class="shadow-md sm:rounded-lg mb-8">
                  <h1 class="flex justify-center text-2xl mb-3 font-bold text-white">Best Product</h1>
                  <table class="w-full text-sm text-center text-white">
                    <thead class="text-xs text-white uppercase bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50">
                      <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Product Name</th>
                        <th scope="col" class="px-6 py-3">Category</th>
                        <th scope="col" class="px-6 py-3">rating</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="bg-dark border-b">
                        <td class="px-6 py-4">1</td>
                        <td class="flex items-center justify-center py-4 text-white">
                          <img class="w-7 h-7 object-cover" src="images/product1.jpg" alt="Jese image" />
                          <div class="pl-4">
                            <div class="text-sm font-semibold">Web Design</div>
                          </div>
                        </td>
                        <td class="px-6 py-4">Programming</td>
                        <td class="px-6 py-4">
                          <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 mr-2 text-yellow-300 fill-yellow-300">
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                              />
                            </svg>
                            <p class="mt-[2px]">4</p>
                          </div>
                        </td>
                      </tr>
                      <tr class="bg-dark border-b">
                        <td class="px-6 py-4">1</td>
                        <td class="flex items-center justify-center py-4 text-white">
                          <img class="w-7 h-7 object-cover" src="images/product1.jpg" alt="Jese image" />
                          <div class="pl-4">
                            <div class="text-sm font-semibold">Web Design</div>
                          </div>
                        </td>
                        <td class="px-6 py-4">Programming</td>
                        <td class="px-6 py-4">
                          <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 mr-2 text-yellow-300 fill-yellow-300">
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                              />
                            </svg>
                            <p class="mt-[2px]">4</p>
                          </div>
                        </td>
                      </tr>
                      <tr class="bg-dark border-b">
                        <td class="px-6 py-4">1</td>
                        <td class="flex items-center justify-center py-4 text-white">
                          <img class="w-7 h-7 object-cover" src="images/product1.jpg" alt="Jese image" />
                          <div class="pl-4">
                            <div class="text-sm font-semibold">Web Design</div>
                          </div>
                        </td>
                        <td class="px-6 py-4">Programming</td>
                        <td class="px-6 py-4">
                          <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 mr-2 text-yellow-300 fill-yellow-300">
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                              />
                            </svg>
                            <p class="mt-[2px]">4</p>
                          </div>
                        </td>
                      </tr>
                      <tr class="bg-dark border-b">
                        <td class="px-6 py-4">1</td>
                        <td class="flex items-center justify-center py-4 text-white">
                          <img class="w-7 h-7 object-cover" src="images/product1.jpg" alt="Jese image" />
                          <div class="pl-4">
                            <div class="text-sm font-semibold">Web Design</div>
                          </div>
                        </td>
                        <td class="px-6 py-4">Programming</td>
                        <td class="px-6 py-4">
                          <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 mr-2 text-yellow-300 fill-yellow-300">
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                              />
                            </svg>
                            <p class="mt-[2px]">4</p>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- best product end -->
            </div>
          </div>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
    <script>
      new Chart(document.getElementById('line-chart'), {
        type: 'line',
        data: {
          labels: [1500, 1600, 1700, 1750, 1800, 1850, 1900, 1950, 1999, 2050],
          datasets: [
            {
              data: [186, 205, 1321, 1516, 2107, 2191, 3133, 3221, 4783, 5478],
              label: 'America',
              borderColor: '#3cba9f',
              fill: false,
            },
          ],
        },
        options: {
          title: {
            display: true,
            text: 'Chart JS Line Chart Example',
          },
        },
      });
    </script>
  </body>
</html>
