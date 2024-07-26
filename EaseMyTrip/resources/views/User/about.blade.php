
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Ease my Trip</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
                <a class="navbar-brand" href="User_Profile.aspx">Ease my Trip<span>@if($message = Session::get('LoggedUser'))
                    Welcome, {{$message}} 
                    
                   
  
                    @endif  </span></a>
  
                    {{session()->put("email",Session::get('LoggedUser') )}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>Menu
    
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="home" class="nav-link">Home</a></li>
                    <li class="nav-item active"><a href="about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="destination" class="nav-link">Destination</a></li>
                    <li class="nav-item"><a href="resort" class="nav-link">Resort</a></li>
                    <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="history" class="nav-link">History</a></li>
                    <li class="nav-item"><a href="login" class="nav-link"><Button class="btn btn-primary"> Logout</Button> </a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="HomePage.aspx">Home <i class="fa fa-chevron-right"></i></a></span><span>About us <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">About Us</h1>
                </div>
            </div>
        </div>
    </section>
<section class="ftco-section services-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
       <div class="w-100">
        <span class="subheading">Welcome to Ease my Trip</span>
        <h2 class="mb-4">It's time to start your trip</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
        A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
    </div>
    <div class="col-md-6">
     <div class="row">
      <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
        <div class="services services-1 color-1 d-block img" style="background-image: url(images/services-1.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Activities</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary</p>
          </div>
        </div>      
      </div>
      <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
        <div class="services services-1 color-2 d-block img" style="background-image: url(images/services-2.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Travel Arrangements</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary</p>
          </div>
        </div>    
      </div>
      <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
        <div class="services services-1 color-3 d-block img" style="background-image: url(images/services-3.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Private Guide</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary</p>
          </div>
        </div>      
      </div>
      <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
        <div class="services services-1 color-4 d-block img" style="background-image: url(images/services-4.jpg);">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Location Manager</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary</p>
          </div>
        </div>      
      </div>
    </div>
  </div>
</div>
</div>
</section>


    <section class="ftco-section ftco-about img" style="background-image: url(images/bg_4.jpg);">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image: url(images/about-1.jpg);">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">About Us</span>
                                    <h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
                                    <p>Established in 2000, EaseMyTrip has since positioned itself as one of the leading companies, providing great offers, competitive airfares, exclusive discounts, and a seamless online booking experience to many of its customers. The experience of booking your flight tickets, hotel stay, and holiday package through our desktop site or mobile app can be done with complete ease and no hassles at all. We also deliver amazing offers, such as Instant Discounts, Fare Calendar, MyRewardsProgram, MyWallet, and many more while updating them from time to time to better suit our customers’ evolving needs and demands. </p>
                                    <p>At EaseMyTrip, you can find the best of deals and cheap air tickets to any place you want by booking your tickets on our website or app. Being India’s leading website for hotel, flight, and holiday bookings, EaseMyTrip helps you book flight tickets that are affordable and customized to your convenience. With customer satisfaction being our ultimate goal, we also have a 24/7 dedicated helpline to cater to our customer’s queries and concerns. Serving over 5 million happy customers, we at MakeMyTrip are glad to fulfill the dreams of folks who need a quick and easy means to find air tickets. You can get a hold of the cheapest flight of your choice today while also enjoying the other available options for your travel needs with us.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Ease my Trip</span>
                    <h2 class="mb-4">Our Team</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">

                                     <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url()"></div>
                                        <div class="pl-3">
                                            <p class="name">Dhaval Gohel</p>
                                            <span class="position">Gujarat Technological University</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">

                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/aryan.jpeg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Aryan Prajapati</p>
                                            <span class="position">Gujarat Technological University</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">

                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/shubham.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Shubham Gadhiya</p>
                                            <span class="position">Gujarat Technological University</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>





    <footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md pt-5">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">About</h2>
                        <p>The World Travel Guide (WTG) is the flagship digital consumer brand within the Columbus Travel Media portfolio. </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Infromation</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
                            <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
                            <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Call Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="HomePage.aspx" class="py-2 d-block">Home</a></li>
                            <li><a href="About.aspx" class="py-2 d-block">About</a></li>
                            <li><a href="Destination.aspx" class="py-2 d-block">Destination</a></li>
                            <li><a href="Resort.aspx" class="py-2 d-block">Resort</a></li>
                            <li><a href="Contact.aspx" class="py-2 d-block">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">A 104 BusinessHub First floor,Thaltej Ahmedabad 380052 Gujarat</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+91 9898457047</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">Easemytrip104@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | Ease my Trip  <i class="fa fa-heart" aria-hidden="true"></i></a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
