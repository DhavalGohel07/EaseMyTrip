<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ease my Trip
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="public/css/nucleo-icons.css" rel="stylesheet" />
    <link href="public/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="public/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

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
            background: linear-gradient(135deg, #FF4500, #FF4500);
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
            background: linear-gradient(135deg, #FF4500, #FF4500);
        }

        form .button input:hover {
            /* transform: scale(0.99); */
            background: linear-gradient(-135deg, #FF4500, #FF4500);
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
    </style>




</head>

<body>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <div class="container-fluid py-4">
            <div class="row">


                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">

                        <div class="container">
                            <div class="title">Booking Details</div>

                          {{Session::put('price', $price*100)}} 
                          {{Session::put('name', $name)}} 
                          {{-- {{Session::put('email',   session()->get('email'))}}  --}}
                   


                            <div class="content">
                                <form id="paymentForm" action="{{ route('payment.store') }}" method="POST">
                                    @csrf
                                    <div class="user-details">
                                        <div class="input-box">
                                            <span class="details">Package Name</span>
                                            <input type="text" ID="packName" name="name"
                                                value="{{$name}}" readonly="true" />
                                        </div>

                                        <div class="input-box">
                                            <span class="details">Package Price</span>


                                            <input type="text" id="two" name="price"
                                                value="{{$price}}" readonly="true">

                                        </div>
                                        <div class="input-box">
                                            <span class="details">Email</span>

                                            <input type="email" id="" name="email"
                                                value="  {{ session()->get('email') }}" readonly="true" />


                                        </div>
                                        <div class="input-box">
                                            <span class="details">Phone No</span>

                                            <input type="phone" ID="bookPhn" name="phone" MaxLength="50"
                                                required />

                                        </div>


                                        <div class="input-box">
                                            <span class="details">Persons</span>

                                            <input type="number" id="one" name="person" min="1"
                                                max="4" OnChange="av(this)" required />

                                        </div>
                                        <div class="input-box">
                                            <span class="details">Select Date</span>

                                            <input type="date" id="bookArrival" name="date" runat="server"
                                                textMode="Date" placeholder="22/4/2002" required />


                                        </div>

                                    </div>
                                    <div class="button">

                                        <input type="submit" value="Make Payment " />


                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
     

            </form> 

             {{-- @if(Session::has('data')) --}}

          
   {{-- @endif  --}}







            {{-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                        <script>
                            // Define options object

                            function av(avSelect) {
                                var one = parseInt(avSelect.form.one.value);
                                var two = parseInt(avSelect.form.two.value);
                                var avvy = one * two; // Calculate the amount without appending "/-"

                                options.amount = (parseInt(avSelect.form.one.value)) * (parseInt(avSelect.form.two.value) *
                                100); // Append "/-" to make it in INR format
                                // console.log("Amount is: ",options.amount);

                                var lab = document.getElementById("labelid");
                                lab.textContent = avvy + "/- ";

                                // Update the amount in options object
                            }

                            var options = {
                                "key": "rzp_test_M8861YNKTu5BjB",
                                "amount": 0, // Initialize amount as 0
                                "currency": "INR",
                                "name": "Ease My Trip",
                                "description": "Payment Description",
                                "image": "public/images/background.jpg",
                                "handler": function(response) {
                                    // Handle the response
                                    console.log(response);
                                    window.location.href = "{{ route('destination.index') }}";

                                },
                                "prefill": {
                                    "name": "Customer Name",
                                    "email": "customer@example.com",
                                    // Add more pre-filled data if needed
                                },
                                "theme": {
                                    "color": "#FFBC40"
                                }
                            };

                            // Attach event listener to the form
                            var form = document.getElementById('paymentForm');
                            form.addEventListener('submit', function(event) {
                                event.preventDefault();
                                var rzp = new Razorpay(options);
                                rzp.open();
                            });
                        </script> --}}


</body>

</html>
