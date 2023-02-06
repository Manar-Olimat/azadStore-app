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
                    <form class="mt-6 mb-4 md:hidden">
                        <div class="mb-3 pt-0">
                            <input type="text" placeholder="Search"
                                class="px-3 py-2 h-12 border border-solid  border-gray-600 placeholder-gray-400 text-gray-700 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
                        </div>
                    </form>
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
                        {{-- <li class="items-center navbar-item account-menu">
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
                        </li> --}}

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
                    
                    <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                        <a class="text-gray-600 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
                            <div class="items-center flex">
                                <span
                                    class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full">
                                          <img class="w-8 h-8 rounded-full" src="data:image/png;base64,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" alt="user photo">
</span>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                            style="min-width: 12rem;" id="user-dropdown">
                            <a href="/"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">back to the site</a>
                            <form action="/logout" method="POST" class="inline">
                                @csrf
                            <button
                            {{-- href="/logout" --}}
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">logout
                            </button>
                            </form>
                    </ul>
                </div>
            </nav>
            <!-- Header -->
            <div class="tab-contents">
                <div id="dashboard">
                    <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
                        <div class="px-4 md:px-10 mx-auto w-full">
                            <div>
                                <!-- Card stats -->
                                
                            </div>
                        </div>
                    </div>
                    <div class="px-4 md:px-10 mx-auto w-full -m-24">
                        <div class="flex flex-wrap">
                            <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-gray-900">
                                    <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                        <div class="flex flex-wrap items-center">
                                            <div class="relative w-full max-w-full flex-grow flex-1">
                                                <h6 class="uppercase text-gray-200 mb-1 text-xs font-semibold">
                                                    Overview
                                                </h6>
                                                <h2 class="text-white text-xl font-semibold">
                                                    Sales value
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 flex-auto">
                                        <!-- Chart -->
                                        <div class="relative" style="height:350px">
                                            <canvas id="line-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full xl:w-4/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                                    <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                        <div class="flex flex-wrap items-center">
                                            <div class="relative w-full max-w-full flex-grow flex-1">
                                                <h6 class="uppercase text-gray-500 mb-1 text-xs font-semibold">
                                                    Performance
                                                </h6>
                                                <h2 class="text-gray-800 text-xl font-semibold">
                                                    Total orders
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 flex-auto">
                                        <!-- Chart -->
                                        <div class="relative" style="height:350px">
                                            <canvas id="bar-chart"></canvas>
                                        </div>
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
                                                AZAD STORE
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>{{-- /dashboard  --}}
               
            </div> {{-- /tab content --}}

            
        </div>
        <script>
            function openTabs(tabsName) {
                var i;
                var x = document.getElementsByClassName("step-tab");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                document.getElementById(tabsName).style.display = "block";
            }
        </script>
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
