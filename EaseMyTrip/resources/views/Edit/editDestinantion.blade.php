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

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;

        }

        .container .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        .container .title::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .content form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }

        form .input-box span.details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .user-details .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .user-details .input-box input:focus,
        .user-details .input-box input:valid {
            border-color: #9b59b6;
        }

        form .button {
            height: 45px;
            margin: 35px 0
        }

        form .button input {
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background-color: #f15d30 ;
        }

        @media(max-width: 584px) {
            .container {
                max-width: 100%;
            }

            form .user-details .input-box {
                margin-bottom: 15px;
                width: 100%;
            }

            form .category {
                width: 100%;
            }

            .content form .user-details {
                max-height: 300px;
                overflow-y: scroll;
            }

            .user-details::-webkit-scrollbar {
                width: 5px;
            }
        }

        @media(max-width: 459px) {
            .container .content .category {
                flex-direction: column;
            }
        }

        table {


            border: 2px solid black;
            border-radius: 5px;
            
        }


        .dataview th {

            padding: 5px;
            border-radius: 100px;
            border: 1px solid black;
            padding-bottom: 4px;
            padding-top: 4px;
            background-color: darkgray;

        }

        .dataview td {

            padding: 10px;
            border: 1px solid black;
            padding-bottom: 4px;
            padding-top: 4px;
            text-align: center;
        }
    </style>

</head>

<body>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">

                                <div class="container">
                                    <div class="title">Destination Update</div>
                                    <div class="content">
                                        <form action="/admin-destination/{{$admin->id}}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="user-details">
                                                <div class="input-box">
                                                    <span class="details">Destination Name</span>

                                                    <input type="text" class="form-control" name="dname"
                                                        placeholder="Enter Destination" value="{{$admin->dname}}" required />


                                                </div>
                                                <div class="input-box">
                                                    <span class="details">No of Days Nights</span>



                                                    <input type="phone" class="form-control" name="ddays"
                                                        placeholder="Enter No. of Days & Nights" value="{{$admin->ddays}}" required />



                                                </div>
                                                <div class="input-box">
                                                    <span class="details">Description</span>


                                                    <input type="text" class="form-control" name="ddesc"
                                                        placeholder="Enter Description" value="{{$admin->ddesc}}" required />

                                                </div>
                                                <div class="input-box">
                                                    <span class="details">Places Name</span>

                                                    <input type="text" class="form-control" name="dplace"
                                                        placeholder="Enter Places" value="{{$admin->dplace}}" required />

                                                </div>
                                                <div class="input-box">
                                                    <span class="details">Package Price</span>


                                                    <input type="text" class="form-control" name="dprice"
                                                        placeholder="Enter Price" value="{{$admin->dprice}}" required />

                                                </div>
                                                {{-- <div class="input-box">
                                                    <span class="details">Image Upload</span>



                                                    <input type="file" class="form-control" name="dimage"
                                                        required />

                                                </div> --}}
                                            </div>



                                            {{-- <div class="input-box">

                                                <span class="details">Category</span>
                                            </div>
                                            <div>



                                                <input type="radio" name="dcat" value="Winter" id="winter">
                                                <label
                                                    for="winter">Winter</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="dcat" value="Summer" id="summer">
                                                <label
                                                    for="summer">Summer</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="dcat" value="Monsoon" id="monsson">
                                                <label for="monsoon">Monsoon</label>

                                            </div> --}}

                                            <div class="button">

                                                <input type="submit" name="update" value="Update Destination" />

                                            </div>

                                            {{-- <button>Add</button> --}}
                                        </form>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/plugins/perfect-scrollbar.min.js"></script>
    <script src="js/plugins/smooth-scrollbar.min.js"></script>
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
