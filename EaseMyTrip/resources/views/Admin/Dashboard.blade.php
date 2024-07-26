<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <title>Ease my Trip
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="css/nucleo-icons.css" rel="stylesheet" />
    <link href="css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

</head>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');
    
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f0f5ff;
        color: solid black;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 10px;

    }
    
    .table-container {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 90%;
        align-items: center;
        margin-left: auto;
        margin-right: auto;
       
        
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
        
    }
    
    th, td {
        padding: 12px 16px;
        text-align: left;
        
    }
    
    th {
        background-color: #f15d30;
        color: #ffffff;
        font-weight: 500;
    }
    
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    .fonts{
    
        color: black;
    }
    tr:hover {
        background-color: #f3e0da;;
    }
    
    @media (max-width: 768px) {
        table {
            font-size: 14px;
        }
    
        th, td {
            padding: 8px 12px;
        }
    }
    .btn{
    
        border:2px solid black;
        border-radius: 25px;
        font-weight: bold;
    }
    
    @media (max-width: 480px) {
        table {
            font-size: 12px;
        }
    
        th, td {
            padding: 6px 8px;
        }
    }
    .bg{
        background-color: #484848;
    }
        </style>
<body class="g-sidenav-show  bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
                target="_blank">

                <span class="ms-1 font-weight-bold text-white">Ease my Trip</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="{{url('admin-dash')}}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{url('admin-destination')}}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Add Destinations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{url("admin-resort")}}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Add Resorts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{url("admin-user")}}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Users </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{url("admin-admin")}}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                        </div>
                        <span class="nav-link-text ms-1">Admins</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{url("admin-feedback")}}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">notifications</i>
                        </div>
                        <span class="nav-link-text ms-1">User Contacts</span>
                    </a>
                </li>

                <div class="sidenav-footer position-absolute w-100 bottom-0 ">
                    <div class="mx-3">
                        <a class="btn bg-gradient-primary mt-4 w-100" href="admin-login" type="button">Logout</a>
                    </div>
                </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>

                <ul class="navbar-nav  justify-content-end">

                    <li class="nav-item d-flex align-items-center">

                    </li>




                </ul>
                </li>
                </ul>

            </div>
            </div>

        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Today's Resort Booking</p>
                                <h4 class="mb-0">{{count($ralldata)}}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than
                                last week</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Today's Destination Bookings</p>
                                <h4 class="mb-0">{{count($dalldata)}}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than
                                last month</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Total No Of Clients</p>
                                <h4 class="mb-0">{{count($loginuser)}}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than
                                yesterday</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Feedback Review</p>
                                <h4 class="mb-0">{{count($contact)}}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than
                                yesterday</p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            

                <div class="row">
                    <div class="col-12">
                        <div class="card my-4" style="width:160vh; text-align:center; ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="shadow border-radius-lg pt-4 pb-3 bg">
                                    <h6 class="text-white text-capitalize ps-3">Booked Packages</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">

                                 

                                    <div class="table-container" >
        
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Customer</th>
                                                    <th>Package Name</th>
                                                    <th>Price</th>
                                                    <th>Persons</th>
                                                    <th>Arrival Date</th>
                                                    <th>Contact</th>
                                                    <th>Payment Id</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                              
                                                @foreach ($dalldata as $i => $a)
                                            @csrf
                                                    <tr class="fonts">
                                                        <td>{{ $a['email'] }}</td>
                                                        <td>{{ $a['name'] }}</td>
                                                        <td>{{ $a['price'] }}</td>
                                                        <td>{{ $a['person'] }}</td>
                                                        <td>{{ $a['date'] }}</td>
                                                        <td>{{ $a['phone'] }}</td>
                                                        <td>{{ $a['paymentid'] }}</td>
                                                    </tr>
                                                </form>
                                            @endforeach
                                
                                
                                
                                            </tbody>
                                        </table>
                                         
                                    </div>


                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-12">
                                <div class="card my-4" style="width:160vh; text-align:center;">
                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                        <div class="shadow border-radius-lg pt-4 pb-3 bg">
                                            <h6 class="text-white text-capitalize ps-3">Booked Resorts</h6>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pb-2">
                                        <div class="table-responsive p-0">

                                          
                                            <div class="table-container" >
        
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Customer</th>
                                                            <th>Package Name</th>
                                                            <th>Price</th>
                                                            <th>Persons</th>
                                                            <th>Arrival Date</th>
                                                            <th>Contact</th>
                                                            <th>Payment Id</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      
                                                        @foreach ($ralldata as $i => $a)
                                                    @csrf
                                                            <tr class="fonts">
                                                                <td>{{ $a['email'] }}</td>
                                                                <td>{{ $a['name'] }}</td>
                                                                <td>{{ $a['price'] }}</td>
                                                                <td>{{ $a['person'] }}</td>
                                                                <td>{{ $a['date'] }}</td>
                                                                <td>{{ $a['phone'] }}</td>
                                                                <td>{{ $a['paymentid'] }}</td>
                                                            </tr>
                                                        </form>
                                                    @endforeach
                                        
                                        
                                        
                                                    </tbody>
                                                </table>
                                         


                                        </div>
                                    </div>
                                </div>





            










            <!--   Core JS Files   -->
            <script src="js/core/popper.min.js"></script>
            <script src="js/core/bootstrap.min.js"></script>
            <script src="js/plugins/perfect-scrollbar.min.js"></script>
            <script src="js/plugins/smooth-scrollbar.min.js"></script>
            <script src="js/plugins/chartjs.min.js"></script>
            <script>
                var ctx = document.getElementById("chart-bars").getContext("2d");

                new Chart(ctx, {
                    type: "bar",
                    data: {
                        labels: ["M", "T", "W", "T", "F", "S", "S"],
                        datasets: [{
                            label: "Sales",
                            tension: 0.4,
                            borderWidth: 0,
                            borderRadius: 4,
                            borderSkipped: false,
                            backgroundColor: "rgba(255, 255, 255, .8)",
                            data: [50, 20, 10, 22, 50, 10, 40],
                            maxBarThickness: 6
                        }, ],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false,
                            }
                        },
                        interaction: {
                            intersect: false,
                            mode: 'index',
                        },
                        scales: {
                            y: {
                                grid: {
                                    drawBorder: false,
                                    display: true,
                                    drawOnChartArea: true,
                                    drawTicks: false,
                                    borderDash: [5, 5],
                                    color: 'rgba(255, 255, 255, .2)'
                                },
                                ticks: {
                                    suggestedMin: 0,
                                    suggestedMax: 500,
                                    beginAtZero: true,
                                    padding: 10,
                                    font: {
                                        size: 14,
                                        weight: 300,
                                        family: "Roboto",
                                        style: 'normal',
                                        lineHeight: 2
                                    },
                                    color: "#fff"
                                },
                            },
                            x: {
                                grid: {
                                    drawBorder: false,
                                    display: true,
                                    drawOnChartArea: true,
                                    drawTicks: false,
                                    borderDash: [5, 5],
                                    color: 'rgba(255, 255, 255, .2)'
                                },
                                ticks: {
                                    display: true,
                                    color: '#f8f9fa',
                                    padding: 10,
                                    font: {
                                        size: 14,
                                        weight: 300,
                                        family: "Roboto",
                                        style: 'normal',
                                        lineHeight: 2
                                    },
                                }
                            },
                        },
                    },
                });


                var ctx2 = document.getElementById("chart-line").getContext("2d");

                new Chart(ctx2, {
                    type: "line",
                    data: {
                        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [{
                            label: "Mobile apps",
                            tension: 0,
                            borderWidth: 0,
                            pointRadius: 5,
                            pointBackgroundColor: "rgba(255, 255, 255, .8)",
                            pointBorderColor: "transparent",
                            borderColor: "rgba(255, 255, 255, .8)",
                            borderColor: "rgba(255, 255, 255, .8)",
                            borderWidth: 4,
                            backgroundColor: "transparent",
                            fill: true,
                            data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                            maxBarThickness: 6

                        }],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false,
                            }
                        },
                        interaction: {
                            intersect: false,
                            mode: 'index',
                        },
                        scales: {
                            y: {
                                grid: {
                                    drawBorder: false,
                                    display: true,
                                    drawOnChartArea: true,
                                    drawTicks: false,
                                    borderDash: [5, 5],
                                    color: 'rgba(255, 255, 255, .2)'
                                },
                                ticks: {
                                    display: true,
                                    color: '#f8f9fa',
                                    padding: 10,
                                    font: {
                                        size: 14,
                                        weight: 300,
                                        family: "Roboto",
                                        style: 'normal',
                                        lineHeight: 2
                                    },
                                }
                            },
                            x: {
                                grid: {
                                    drawBorder: false,
                                    display: false,
                                    drawOnChartArea: false,
                                    drawTicks: false,
                                    borderDash: [5, 5]
                                },
                                ticks: {
                                    display: true,
                                    color: '#f8f9fa',
                                    padding: 10,
                                    font: {
                                        size: 14,
                                        weight: 300,
                                        family: "Roboto",
                                        style: 'normal',
                                        lineHeight: 2
                                    },
                                }
                            },
                        },
                    },
                });

                var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

                new Chart(ctx3, {
                    type: "line",
                    data: {
                        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [{
                            label: "Mobile apps",
                            tension: 0,
                            borderWidth: 0,
                            pointRadius: 5,
                            pointBackgroundColor: "rgba(255, 255, 255, .8)",
                            pointBorderColor: "transparent",
                            borderColor: "rgba(255, 255, 255, .8)",
                            borderWidth: 4,
                            backgroundColor: "transparent",
                            fill: true,
                            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                            maxBarThickness: 6

                        }],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false,
                            }
                        },
                        interaction: {
                            intersect: false,
                            mode: 'index',
                        },
                        scales: {
                            y: {
                                grid: {
                                    drawBorder: false,
                                    display: true,
                                    drawOnChartArea: true,
                                    drawTicks: false,
                                    borderDash: [5, 5],
                                    color: 'rgba(255, 255, 255, .2)'
                                },
                                ticks: {
                                    display: true,
                                    padding: 10,
                                    color: '#f8f9fa',
                                    font: {
                                        size: 14,
                                        weight: 300,
                                        family: "Roboto",
                                        style: 'normal',
                                        lineHeight: 2
                                    },
                                }
                            },
                            x: {
                                grid: {
                                    drawBorder: false,
                                    display: false,
                                    drawOnChartArea: false,
                                    drawTicks: false,
                                    borderDash: [5, 5]
                                },
                                ticks: {
                                    display: true,
                                    color: '#f8f9fa',
                                    padding: 10,
                                    font: {
                                        size: 14,
                                        weight: 300,
                                        family: "Roboto",
                                        style: 'normal',
                                        lineHeight: 2
                                    },
                                }
                            },
                        },
                    },
                });
            </script>
            <script>
                var win = navigator.platform.indexOf('Win') > -1;
                if (win && document.querySelector('#sidenav-scrollbar')) {
                    var options = {
                        damping: '0.5'
                    }
                    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
                }
            </script>
            <!-- Github buttons -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>
