<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <link rel="stylesheet" href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    {{-- @vite('resources/css/app.css') --}}

    <title>Dashboard | Azad Store</title>
</head>

<body class="text-gray-800 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <nav
            class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
            <div
                class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <button
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                    <i class="fas fa-bars"></i></button>
                <a class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                    href="javascript:void(0)">
                    Azad Store Dashboard
                </a>
                <ul class="md:hidden items-center flex flex-wrap list-none">
                    <li class="inline-block relative">
                        <a class="text-gray-600 block py-1 px-3" href="#pablo"
                            onclick="openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                            style="min-width: 12rem;" id="notification-dropdown">
                            <a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Action</a><a
                                href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Another
                                action</a><a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Something
                                else here</a>
                            <div class="h-0 my-2 border border-solid border-gray-200"></div>
                            <a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Seprated
                                link</a>
                        </div>
                    </li>
                    <li class="inline-block relative">
                        <a class="text-gray-600 block" href="#pablo"
                            onclick="openDropdown(event,'user-responsive-dropdown')">
                            <div class="items-center flex">
                                <span
                                    class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"><img
                                        alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                        src="./assets/img/team-1-800x800.jpg" /></span>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                            style="min-width: 12rem;" id="user-responsive-dropdown">
                            <a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Action</a><a
                                href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Another
                                action</a><a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Something
                                else here</a>
                            <div class="h-0 my-2 border border-solid border-gray-200"></div>
                            <a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Seprated
                                link</a>
                        </div>
                    </li>
                </ul>
                <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
                    id="example-collapse-sidebar">
                    <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-300">
                        <div class="flex flex-wrap">
                            <div class="w-6/12">
                                <a class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                                    href="javascript:void(0)">
                                    Tailwind Starter Kit
                                </a>
                            </div>
                            <div class="w-6/12 flex justify-end">
                                <button type="button"
                                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                                    onclick="toggleNavbar('example-collapse-sidebar')">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                   
                    <ul class="md:flex-col md:min-w-full flex flex-col list-none" id="tabs">
                        <li class="items-center">
                            <a class="text-pink-500 hover:text-pink-600 text-xs uppercase py-3 font-bold block"
                                href="/dashboard" id="default-tab" onclick="openTabs('dashboard')">
                                <i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                                Dashboard</a>
                        </li>
                        <li class="items-center sidelist">
                            <a class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                                href="dashboard_products" onclick="openTabs('products')">
                                <i class="fas fa-newspaper text-gray-500 mr-2 text-sm"></i>
                                Products</a>
                        </li>
                        <li class="items-center navbar-item account-menu">
                            <a class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                                href="dashboard_stores">
                                <i class="fas fa-user-circle text-gray-500 mr-2 text-sm"></i>
                                Stores</a>
                        </li>
                        <li class="items-center navbar-item account-menu">
                            <a class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                                href="dashboard_orders"><i class="fas fa-fingerprint text-gray-500 mr-2 text-sm"></i>
                                Orders</a>
                        </li>
                        <li class="items-center navbar-item account-menu">
                            <a class="text-gray-400 text-xs uppercase py-3 font-bold block" 
                            href="dashboard_users">
                                <i class="fas fa-clipboard-list text-gray-400 mr-2 text-sm"></i>
                                Users</a>
                        </li>

                    </ul>
                    <hr class="my-4 md:min-w-full" />


                </div>
            </div>
        </nav>
        <div class="relative md:ml-64 bg-gray-100">
            <nav
                class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4">
                <div class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4">
                    <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
                        href="./index.html">Admin Dashboard</a>
                    <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
                        <div class="relative flex w-full flex-wrap items-stretch">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i
                                    class="fas fa-search"></i></span>
                            <input type="text" placeholder="Search here..."
                                class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                        </div>
                    </form>
                    <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                        <a class="text-gray-600 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
                            <div class="items-center flex">
                                <span
                                    class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"><img
                                        alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                        src="./assets/img/team-1-800x800.jpg" /></span>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                            style="min-width: 12rem;" id="user-dropdown">
                            <a href="/"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">back to the site</a><a
                            href="/logout"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">logout
                            </a>
                    </ul>
                </div>
            </nav>
            <!-- Header -->
                <div id="dashboard">
                    <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
                        <div class="px-4 md:px-10 mx-auto w-full">
                            <div>
                                <!-- Card stats -->
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                        <div
                                            class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                            <div class="flex-auto p-4">
                                                <div class="flex flex-wrap">
                                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                        <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                            Products
                                                        </h5>
                                                        <span class="font-semibold text-xl text-gray-800">
                                                            350,897
                                                        </span>
                                                    </div>
                                                    <div class="relative w-auto pl-4 flex-initial">
                                                        <div
                                                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                                            <i class="far fa-chart-bar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 md:px-10 mx-auto w-full -m-24">
                        
                        <div class="flex flex-wrap mt-4">
                            <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                                        <div class="flex flex-wrap items-center">
                                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                                <h3 class="font-semibold text-base text-gray-800">
                                                    Products Listing
                                                </h3>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="block w-full overflow-x-auto">
                                        <!-- Projects table -->
                                        <table class="items-center w-full bg-transparent border-collapse">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                                                        Page name
                                                    </th>
                                                    <th
                                                        class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                                                        Visitors
                                                    </th>
                                                    <th
                                                        class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                                                        Unique users
                                                    </th>
                                                    <th
                                                        class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                                                        Bounce rate
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                                                        /argon/
                                                    </th>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        4,569
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        340
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        <i class="fas fa-arrow-up text-green-500 mr-4"></i>
                                                        46,53%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                                                        /argon/index.html
                                                    </th>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        3,985
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        319
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                                                        46,53%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                                                        /argon/charts.html
                                                    </th>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        3,513
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        294
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                                                        36,49%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                                                        /argon/tables.html
                                                    </th>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        2,050
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        147
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        <i class="fas fa-arrow-up text-green-500 mr-4"></i>
                                                        50,87%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                                                        /argon/profile.html
                                                    </th>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        1,795
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        190
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                                        <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                                                        46,53%
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        
                        <footer class="block py-4">
                            <div class="container mx-auto px-4">
                                <hr class="mb-4 border-b-1 border-gray-300" />
                                <div class="flex flex-wrap items-center md:justify-between justify-center">
                                    <div class="w-full md:w-4/12 px-4">
                                        <div class="text-sm text-gray-600 font-semibold py-1">
                                            Copyright © <span id="javascript-date"></span>
                                            <a href="https://www.creative-tim.com"
                                                class="text-gray-600 hover:text-gray-800 text-sm font-semibold py-1">
                                                Creative Tim
                                            </a>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-8/12 px-4">
                                        <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                                            <li>
                                                <a href="https://www.creative-tim.com"
                                                    class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3">
                                                    Creative Tim
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.creative-tim.com/presentation"
                                                    class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3">
                                                    About Us
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://blog.creative-tim.com"
                                                    class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3">
                                                    Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/creativetimofficial/tailwind-starter-kit/blob/master/LICENSE.md"
                                                    class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3">
                                                    MIT License
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>{{-- /dashboard  --}}
               

            
        </div>
       
        <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" charset="utf-8"></script>
        <script type="text/javascript">
            /* Sidebar - Side navigation menu on mobile/responsive mode */
            function toggleNavbar(collapseID) {
                document.getElementById(collapseID).classList.toggle("hidden");
                document.getElementById(collapseID).classList.toggle("bg-white");
                document.getElementById(collapseID).classList.toggle("m-2");
                document.getElementById(collapseID).classList.toggle("py-3");
                document.getElementById(collapseID).classList.toggle("px-6");
            }
            /* Function for dropdowns */
            function openDropdown(event, dropdownID) {
                let element = event.target;
                while (element.nodeName !== "A") {
                    element = element.parentNode;
                }
                var popper = new Popper(element, document.getElementById(dropdownID), {
                    placement: "bottom-end"
                });
                document.getElementById(dropdownID).classList.toggle("hidden");
                document.getElementById(dropdownID).classList.toggle("block");
            }


            (function() {
                /* Add current date to the footer */
                document.getElementById("javascript-date").innerHTML = new Date().getFullYear();
                /* Chart initialisations */
                /* Line Chart */
                var config = {
                    type: "line",
                    data: {
                        labels: [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July"
                        ],
                        datasets: [{
                                label: new Date().getFullYear(),
                                backgroundColor: "#4c51bf",
                                borderColor: "#4c51bf",
                                data: [65, 78, 66, 44, 56, 67, 75],
                                fill: false
                            },
                            {
                                label: new Date().getFullYear() - 1,
                                fill: false,
                                backgroundColor: "#ed64a6",
                                borderColor: "#ed64a6",
                                data: [40, 68, 86, 74, 56, 60, 87]
                            }
                        ]
                    },
                    options: {
                        maintainAspectRatio: false,
                        responsive: true,
                        title: {
                            display: false,
                            text: "Sales Charts",
                            fontColor: "white"
                        },
                        legend: {
                            labels: {
                                fontColor: "white"
                            },
                            align: "end",
                            position: "bottom"
                        },
                        tooltips: {
                            mode: "index",
                            intersect: false
                        },
                        hover: {
                            mode: "nearest",
                            intersect: true
                        },
                        scales: {
                            xAxes: [{
                                ticks: {
                                    fontColor: "rgba(255,255,255,.7)"
                                },
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: "Month",
                                    fontColor: "white"
                                },
                                gridLines: {
                                    display: false,
                                    borderDash: [2],
                                    borderDashOffset: [2],
                                    color: "rgba(33, 37, 41, 0.3)",
                                    zeroLineColor: "rgba(0, 0, 0, 0)",
                                    zeroLineBorderDash: [2],
                                    zeroLineBorderDashOffset: [2]
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    fontColor: "rgba(255,255,255,.7)"
                                },
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: "Value",
                                    fontColor: "white"
                                },
                                gridLines: {
                                    borderDash: [3],
                                    borderDashOffset: [3],
                                    drawBorder: false,
                                    color: "rgba(255, 255, 255, 0.15)",
                                    zeroLineColor: "rgba(33, 37, 41, 0)",
                                    zeroLineBorderDash: [2],
                                    zeroLineBorderDashOffset: [2]
                                }
                            }]
                        }
                    }
                };
                var ctx = document.getElementById("line-chart").getContext("2d");
                window.myLine = new Chart(ctx, config);

                /* Bar Chart */
                config = {
                    type: "bar",
                    data: {
                        labels: [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July"
                        ],
                        datasets: [{
                                label: new Date().getFullYear(),
                                backgroundColor: "#ed64a6",
                                borderColor: "#ed64a6",
                                data: [30, 78, 56, 34, 100, 45, 13],
                                fill: false,
                                barThickness: 8
                            },
                            {
                                label: new Date().getFullYear() - 1,
                                fill: false,
                                backgroundColor: "#4c51bf",
                                borderColor: "#4c51bf",
                                data: [27, 68, 86, 74, 10, 4, 87],
                                barThickness: 8
                            }
                        ]
                    },
                    options: {
                        maintainAspectRatio: false,
                        responsive: true,
                        title: {
                            display: false,
                            text: "Orders Chart"
                        },
                        tooltips: {
                            mode: "index",
                            intersect: false
                        },
                        hover: {
                            mode: "nearest",
                            intersect: true
                        },
                        legend: {
                            labels: {
                                fontColor: "rgba(0,0,0,.4)"
                            },
                            align: "end",
                            position: "bottom"
                        },
                        scales: {
                            xAxes: [{
                                display: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: "Month"
                                },
                                gridLines: {
                                    borderDash: [2],
                                    borderDashOffset: [2],
                                    color: "rgba(33, 37, 41, 0.3)",
                                    zeroLineColor: "rgba(33, 37, 41, 0.3)",
                                    zeroLineBorderDash: [2],
                                    zeroLineBorderDashOffset: [2]
                                }
                            }],
                            yAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: "Value"
                                },
                                gridLines: {
                                    borderDash: [2],
                                    drawBorder: false,
                                    borderDashOffset: [2],
                                    color: "rgba(33, 37, 41, 0.2)",
                                    zeroLineColor: "rgba(33, 37, 41, 0.15)",
                                    zeroLineBorderDash: [2],
                                    zeroLineBorderDashOffset: [2]
                                }
                            }]
                        }
                    }
                };
                ctx = document.getElementById("bar-chart").getContext("2d");
                window.myBar = new Chart(ctx, config);
            })();
        </script>
        {{-- <script src={{asset("js/app.js")}}></script> --}}

</body>

</html>
