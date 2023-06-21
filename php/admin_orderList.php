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
            <a href="admin_dashboard.html" class="flex items-center my-1 px-4 py-3 text-white border-l-4 border-transparent hover:border-primary bg-darkest hover:bg-dark transition">
              <img src="images/dashboard.png" alt="" class="w-5 h-5 mr-5" />
              Dashboard
            </a>

            <a href="admin_orderList.html" class="flex items-center my-1 px-4 py-3 text-white border-l-4 border-primary bg-dark">
              <img src="images/list.png" alt="" class="w-5 h-5 mr-5" />
              Order List
            </a>

            <a href="admin_orderReport.html" class="flex items-center my-1 px-3 py-3 text-white border-l-4 border-transparent hover:border-primary bg-darkest hover:bg-dark transition">
              <img src="images/report.png" alt="" class="w-7 h-7 mr-4" />
              Order Report
            </a>

            <a href="admin_manageFreelance.html" class="flex items-center my-1 px-4 py-3 text-white border-l-4 border-transparent hover:border-primary bg-darkest hover:bg-dark transition">
              <img src="images/freelance.png" alt="" class="w-5 h-5 mr-5" />
              Manage Freelance
            </a>

            <a href="admin_manageProduct.html" class="flex items-center my-1 px-4 py-3 text-white border-l-4 border-transparent hover:border-primary bg-darkest hover:bg-dark transition">
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
        <div class="overflow-x-auto shadow-md sm:rounded-lg mb-8">
          <table class="w-full text-sm text-center text-white">
            <caption class="p-5 text-3xl font-semibold text-left text-white bg-dark">
              Order list
              <p class="mt-3 mb-2 text-sm font-normal text-white">Embrace Your Creative Freedom and Elevate Your Business with our Seamless Freelance Services, Unlocking Your Full Potential and Enabling Success.</p>
              <div class="w-full h-12 mt-3 xl:max-w-full lg:max-w-full lg:flex hidden">
                <input type="text" class="text-white bg-dark w-full border border-r-0 border-primary px-3 rounded-l-md focus:ring-primary focus:border-primary" placeholder="Search orders" />
                <button
                  type="submit"
                  class="flex items-center bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 text-white px-9 font-medium text-base rounded-r-md transition"
                >
                  Search
                </button>
              </div>
            </caption>
            <thead class="text-xs text-white uppercase bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50">
              <tr>
                <th scope="col" class="px-6 py-3">Customer name</th>
                <th scope="col" class="px-6 py-3">product name</th>
                <th scope="col" class="px-6 py-3">freelancer</th>
                <th scope="col" class="px-6 py-3">delivery time</th>
                <th scope="col" class="px-6 py-3">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-dark border-b border-gray-600">
                <td class="px-6 py-4">Vahri Maulana</td>
                <td class="px-6 py-4">Web Design</td>
                <td class="px-6 py-4">Muhammad Maulana</td>
                <td class="px-6 py-4">3 Days</td>
                <td class="px-6 py-4">
                  <a href="#"
                    ><button
                      type="button"
                      class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                    >
                      <img class="w-6" src="images/accepted.png" alt="" /></button
                  ></a>
                  <button
                    type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/reject.png" alt="" />
                  </button>
                </td>
              </tr>
              <tr class="bg-dark border-b border-gray-600">
                <td class="px-6 py-4">Vahri Maulana</td>
                <td class="px-6 py-4">Web Design</td>
                <td class="px-6 py-4">Muhammad Maulana</td>
                <td class="px-6 py-4">3 Days</td>
                <td class="px-6 py-4">
                  <a href="#"
                    ><button
                      type="button"
                      class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                    >
                      <img class="w-6" src="images/accepted.png" alt="" /></button
                  ></a>
                  <button
                    type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/reject.png" alt="" />
                  </button>
                </td>
              </tr>
              <tr class="bg-dark border-b border-gray-600">
                <td class="px-6 py-4">Vahri Maulana</td>
                <td class="px-6 py-4">Web Design</td>
                <td class="px-6 py-4">Muhammad Maulana</td>
                <td class="px-6 py-4">3 Days</td>
                <td class="px-6 py-4">
                  <a href="#"
                    ><button
                      type="button"
                      class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                    >
                      <img class="w-6" src="images/accepted.png" alt="" /></button
                  ></a>
                  <button
                    type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/reject.png" alt="" />
                  </button>
                </td>
              </tr>
              <tr class="bg-dark border-b border-gray-600">
                <td class="px-6 py-4">Vahri Maulana</td>
                <td class="px-6 py-4">Web Design</td>
                <td class="px-6 py-4">Muhammad Maulana</td>
                <td class="px-6 py-4">3 Days</td>
                <td class="px-6 py-4">
                  <a href="#"
                    ><button
                      type="button"
                      class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                    >
                      <img class="w-6" src="images/accepted.png" alt="" /></button
                  ></a>
                  <button
                    type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/reject.png" alt="" />
                  </button>
                </td>
              </tr>
              <tr class="bg-dark border-b border-gray-600">
                <td class="px-6 py-4">Vahri Maulana</td>
                <td class="px-6 py-4">Web Design</td>
                <td class="px-6 py-4">Muhammad Maulana</td>
                <td class="px-6 py-4">3 Days</td>
                <td class="px-6 py-4">
                  <a href="#"
                    ><button
                      type="button"
                      class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 shadow-lg shadow-teal-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                    >
                      <img class="w-6" src="images/accepted.png" alt="" /></button
                  ></a>
                  <button
                    type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-3 py-3 text-center mr-2"
                  >
                    <img class="w-6" src="images/reject.png" alt="" />
                  </button>
                </td>
              </tr>
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
  </body>
</html>