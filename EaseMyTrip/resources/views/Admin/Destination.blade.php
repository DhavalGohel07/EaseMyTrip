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
            background:#e79e88;
        }

        form .button input:hover {
            /* transform: scale(0.99); */
            background:#f15d30;;
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
                    <a class="nav-link text-white " href="{{ url('admin-dash') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="{{ url('admin-destination') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Add Destinations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{ url('admin-resort') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Add Resorts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{ url('admin-user') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{ url('admin-admin') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                        </div>
                        <span class="nav-link-text ms-1">Admins</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{ url('admin-feedback') }}">
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
                    <h6 class="font-weight-bolder mb-0">Add Destination</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>


                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Add Destination</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">

                                <div class="container">
                                    <div class="title">Destination Details</div>
                                    <div class="content">
                                        <form action="/admin-destination" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="user-details">
                                                <div class="input-box">
                                                    <span class="details">Destination Name</span>

                                                    <input type="text" class="form-control" name="dname"
                                                        placeholder="Enter Destination" required />


                                                </div>
                                                <div class="input-box">
                                                    <span class="details">No of Days Nights</span>



                                                    <input type="phone" class="form-control" name="ddays"
                                                        placeholder="Enter No. of Days & Nights" required />



                                                </div>
                                                <div class="input-box">
                                                    <span class="details">Description</span>


                                                    <input type="text" class="form-control" name="ddesc"
                                                        placeholder="Enter Description" required />

                                                </div>
                                                <div class="input-box">
                                                    <span class="details">Places Name</span>

                                                    <input type="text" class="form-control" name="dplace"
                                                        placeholder="Enter Places" required />

                                                </div>
                                                <div class="input-box">
                                                    <span class="details">Package Price</span>


                                                    <input type="text" class="form-control" name="dprice"
                                                        placeholder="Enter Price" required />

                                                </div>
                                                <div class="input-box">
                                                    <span class="details">Image Upload</span>



                                                    <input type="file" class="form-control" name="dimage"
                                                        required />

                                                </div>
                                            </div>



                                            <div class="input-box">

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

                                            </div>

                                            <div class="button">

                                                <input type="submit" value="Publish Destination" />

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
            <div class="row">
                <div class="col-12">
                    <div class="card my-4" style="width:160vh; text-align:center;">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">View Destination</h6>
                            </div>
                        </div>


                        <br>

                        <table class="dataview">

                            <tr>


                                <td><b>Name</b></td>
                                <td><b>Days</b></td>
                                <td><b>Description</b></td>
                                <td><b>Price</b></td>
                                <td><b>Place</b></td>
                                <td><b>Category</b></td>
                                <td><b>Images</b></td>
                                <td><b>Edit</b></td>
                                <td><b>Delete</b></td>



                            </tr>



                            @foreach ($alldata as $i => $a)
                                <form action="{{ url('/admin-destination' . '/' . $a->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <tr>

                                        <td>{{ $a['dname'] }}</td>
                                        <td>{{ $a['ddays'] }}</td>
                                        <td>{{ $a['ddesc'] }}</td>
                                        <td>{{ $a['dprice'] }}</td>
                                        <td>{{ $a['dplace'] }}</td>
                                        <td>{{ $a['dcat'] }}</td>

                                        <td style="padding: 15px";><img src="{{ asset('storage/images/' . $a['dest_image']) }}" alt="missing"  style="width: 100px";></td>

                                        <td><a href="/admin-destination/{{ $a['id'] }} /edit"> <button type="button"
                                                    name="Edit" value="Edit">📝</button></td></a>
                                        <td><button type="submit" value="delete">❌</button></td>
                                    </tr>
                                </form>
                            @endforeach


                            {{-- <% for (int i = 0; i < dname.Length; i++) { %>



                            <tr>
                                <td><%=dname[i]%></td>
                                <td><%=ddays[i]%></td>
                                <td><%=ddescription[i]%></td>
                                <td><%=dplace[i]%></td>
                                <td><%=dprice[i]%></td>
                                <td><%=dcategory[i]%></td>

                                <td><img src="<%=dimage[i]%>" height="100px" width="100px"></td>
                                <td><a href="AdminDestinations_Update.aspx?uid= <%=did[i]%>">📝</a></td>
                                <td><a href="delete.aspx?id= <%=did[i]%>">❌</a></td>

                                <%--   <asp:LinkButton ID="LinkButton1" runat="server" OnCommand="delete" CommandArgument='shubham'>javatpoint</asp:LinkButton>--%>

                            </tr>



                            <% }%>
 --}}


                        </table>



                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">

                                <asp:GridView ID="GridView1" Width="100%" runat="server" ForeColor="#333333"
                                    BorderStyle="None">
                                    <AlternatingRowStyle BackColor="White" />
                                    <EditRowStyle BackColor="#7C6F57" />
                                    <FooterStyle BackColor="#1C5E55" ForeColor="White" Font-Bold="True" />
                                    <HeaderStyle Font-Bold="True" ForeColor="black" />
                                    <PagerStyle BackColor="#666666" ForeColor="White" HorizontalAlign="Center" />
                                    <RowStyle BackColor="#E3EAEB" />
                                    <SelectedRowStyle BackColor="#C5BBAF" Font-Bold="True" ForeColor="#333333" />


                                    <Columns>
                                        <asp:TemplateField HeaderText="id">

                                            <ItemTemplate>
                                                <asp:Label ID="Label1" runat="server" Text='<%#Bind("id")%>'>
                                                </asp:Label>
                                            </ItemTemplate>

                                        </asp:TemplateField>
                                        <asp:TemplateField HeaderText="name">

                                            <ItemTemplate>
                                                <asp:Label ID="Label2" runat="server" Text='<%#Bind("name") %>'>
                                                </asp:Label>
                                            </ItemTemplate>

                                        </asp:TemplateField>
                                        <asp:TemplateField HeaderText="days">

                                            <ItemTemplate>
                                                <asp:Label ID="Label3" runat="server" Text='<%#Bind("days") %>'>
                                                </asp:Label>
                                            </ItemTemplate>


                                        </asp:TemplateField>
                                        <asp:TemplateField HeaderText="desc">

                                            <ItemTemplate>
                                                <asp:Label ID="Label4" runat="server"
                                                    Text='<%#Bind("description") %>'></asp:Label>
                                            </ItemTemplate>

                                        </asp:TemplateField>
                                        <asp:TemplateField HeaderText="place">

                                            <ItemTemplate>
                                                <asp:Label ID="Label5" runat="server" Text='<%#Bind("place") %>'>
                                                </asp:Label>
                                            </ItemTemplate>

                                        </asp:TemplateField>
                                        <asp:TemplateField HeaderText="price">

                                            <ItemTemplate>
                                                <asp:Label ID="Label6" runat="server" Text='<%#Bind("price") %>'>
                                                </asp:Label>
                                            </ItemTemplate>

                                        </asp:TemplateField>
                                        <asp:TemplateField HeaderText="cat">

                                            <ItemTemplate>
                                                <asp:Label ID="Label7" runat="server"
                                                    Text='<%#Bind("category") %>'></asp:Label>
                                            </ItemTemplate>

                                        </asp:TemplateField>
                                        <asp:TemplateField HeaderText="image">

                                            <ItemTemplate>
                                                <asp:Image ID="Image1" runat="server"
                                                    ImageUrl='<%#Bind("image") %>' />
                                            </ItemTemplate>

                                        </asp:TemplateField>
                                    </Columns>
                                </asp:GridView>
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
