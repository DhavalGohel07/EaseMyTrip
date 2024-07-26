
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
                <a class="navbar-brand" href="User_Profile.aspx">Ease my Trip<span>

                    

                  @if($message = Session::get('LoggedUser'))
                  Welcome, {{$message}} 
                  
                 

                  @endif  </span></a>

                  {{session()->put("email",Session::get('LoggedUser') )}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span>Menu
		
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="home" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="about" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="destination" class="nav-link">Destination</a></li>
                        <li class="nav-item"><a href="resort" class="nav-link">Resort</a></li>
                        <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="history" class="nav-link">History</a></li>
                        <li class="nav-item"><a href="login" class="nav-link"><Button class="btn btn-primary"> Logout</Button> </a></li>
                  
                  
                        {{-- <li class="nav-item">
                          <form action="{{route('logout')}}" method="post">
                            @csrf
                            @method('DELETE')
                          <Button class="btn btn-primary" >@method('DELETE') Logout</Button> </form>
                        </li>
                   --}}
                      </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_5.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate">
                        <span class="subheading">Welcome to EaseMyTrip</span>
                        <h1 class="mb-4">Discover Your Favorite Place with Us</h1>
                        <p class="caps">Travel to the any corner of the world, without going around in circles</p>
                    </div>


                </div>
            </div>
        </div>



        <section class="ftco-section services-section">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                        <div class="w-100">
                            <span class="subheading">Welcome to EaseMyTrip</span>
                            <h2 class="mb-4">It's time to start your adventure</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <p>
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
							A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                            <p><a href="destination" class="btn btn-primary py-3 px-4">View Destination</a></p>
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

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center pb-4">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <span class="subheading">Destination</span>
                        <h2 class="mb-4">Tour Destination</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(/images/candolim.jpg);">
                                <span class="price">₹ 12,000/person</span>
                            </a>
                            <div class="text p-4">
                                <span class="days">3 Days Tour</span>
                                <h3><a href="#">Goa</a></h3>
                                <p class="location"><span class="fa fa-map-marker"></span>Dolphin Cruise, Dudhsagar Falls, Kayaking on a moon-lit night</p>
                                <ul>
                                    <li><span class="flaticon-shower"></span>2</li>
                                    <li><span class="flaticon-king-size"></span>3</li>
                                    <li><span class="flaticon-mountains"></span>Near Beach</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/destination-1.jpg);">
                                <span class="price">₹ 8,000/person</span>
                            </a>
                            <div class="text p-4">
                                <span class="days">3 Days Tour</span>
                                <h3><a href="#">Saputara Hill Station</a></h3>
                                <p class="location"><span class="fa fa-map-marker"></span> Hatgadh Fort, Sunrise And Sunset Point,  Saputara Lake</p>
                                <ul>
                                    <li><span class="flaticon-shower"></span>2</li>
                                    <li><span class="flaticon-king-size"></span>3</li>
                                    <li><span class="flaticon-sun-umbrella"></span>Near Mountain</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/abu.jpg);">
                                <span class="price">₹ 14,000/person</span>
                            </a>
                            <div class="text p-4">
                                <span class="days">4 Days Tour</span>
                                <h3><a href="#">Mount Abu</a></h3>
                                <p class="location"><span class="fa fa-map-marker"></span>Nakki Lake, Guru Shikhar, Toad Rock, Abu Sunset Point</p>
                                <ul>
                                    <li><span class="flaticon-shower"></span>2</li>
                                    <li><span class="flaticon-king-size"></span>3</li>
                                    <li><span class="flaticon-sun-umbrella"></span>Near Mountain</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/diu.jpg);">
                                <span class="price">₹ 10,000/person</span>
                            </a>
                            <div class="text p-4">
                                <span class="days">3 Days Tour</span>
                                <h3><a href="#">Diu Daman</a></h3>
                                <p class="location"><span class="fa fa-map-marker"></span>Diu fort & st. paul church, Nagoa & Devka beach, Daman & dev</p>
                                <ul>
                                    <li><span class="flaticon-shower"></span>2</li>
                                    <li><span class="flaticon-king-size"></span>3</li>
                                    <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/destination-5.jpg);">
                                <span class="price">₹ 80,000/person</span>
                            </a>
                            <div class="text p-4">
                                <span class="days">15 Days Tour</span>
                                <h3><a href="#">Chardham Yatra </a></h3>
                                <p class="location"><span class="fa fa-map-marker"></span>Kedarnath, Badrinath, Gangotri, Yamnotri</p>
                                <ul>
                                    <li><span class="flaticon-shower"></span>2</li>
                                    <li><span class="flaticon-king-size"></span>3</li>
                                    <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url(images/image_3.jpg);">
                                <span class="price">₹ 25,000/person</span>
                            </a>
                            <div class="text p-4">
                                <span class="days">10 Days Tour</span>
                                <h3><a href="#">Manali</a></h3>
                                <p class="location"><span class="fa fa-map-marker"></span>Shimla,Kulu,Manali</p>
                                <ul>
                                    <li><span class="flaticon-shower"></span>2</li>
                                    <li><span class="flaticon-king-size"></span>3</li>
                                    <li><span class="flaticon-sun-umbrella"></span>Near Mountain</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

           <section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
            <div class="container">
                <div class="row justify-content-center pb-4">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <span class="subheading">Most Popular</span>
                        <h2 class="mb-4">Select Your Resort</h2>
                    </div>
                </div>
            </div>
            <div class="container container-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel-destination owl-carousel ftco-animate">
                            <div class="item">
                                <div class="project-destination">
                                    <a href="#" class="img" style="background-image: url(images/goa_resort.jpg);">
                                        <div class="text">
                                            <h3>Goa Resort</h3>
                                            <span>Taj Resort & Convention Centre Goa,Panaji,India</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project-destination">
                                    <a href="#" class="img" style="background-image: url(images/udaipur.jpg);">
                                        <div class="text">
                                            <h3>Udaipur Resort</h3>
                                            <span>Radisson Blu Udaipur Palace Resort & Spa</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project-destination">
                                    <a href="#" class="img" style="background-image: url(images/saputara_resort.jpg);">
                                        <div class="text">
                                            <h3>Saputara Resort</h3>
                                            <span>Hotel Lake View</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project-destination">
                                    <a href="#" class="img" style="background-image: url(images/manali_resort.jpg);">
                                        <div class="text">
                                            <h3>Manali Resort</h3>
                                            <span>Lee Green Lodge, on Mall Road Manali</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project-destination">
                                    <a href="#" class="img" style="background-image: url(images/benglor.jpg);">
                                        <div class="text">
                                            <h3>Bengaluru Resorts</h3>
                                            <span>Golden Palms Hotel & Spa</span>
                                        </div>
                                    </a>
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
                                        <h2 class="mb-4">Ease my Trip Memorable and Safe With Us</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
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
                                            <div class="user-img" style="background-image: url(images/.jpeg)"></div>
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
                                            <div class="user-img" style="background-image: url(images/shubham.jpg)"></div>
                                            <div class="pl-3">
                                                <p class="name">Shubham Gadhiya</p>
                                                <span class="position">Gujarat Technological University</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </section> --}}


        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center pb-4">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <span class="subheading">Post of Popular Places In India</span>
                        <h2 class="mb-4">Recent Post</h2>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="blog-single.html" class="block-20" style="background-image: url('images/tajmahal.jpg');"></a>
                            <div class="text">
                                <div class="d-flex align-items-center mb-4 topp">
                                    <div class="one">
                                        <span class="day">11</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">2020</span>
                                        <span class="mos">September</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#">Most Popular Place In India - TajMahal</a></h3>
                                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="blog-single.html" class="block-20" style="background-image: url('images/hotel-resto-9.jpg');"></a>
                            <div class="text">
                                <div class="d-flex align-items-center mb-4 topp">
                                    <div class="one">
                                        <span class="day">11</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">2020</span>
                                        <span class="mos">September</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#">Most Popular Place In India - Manali</a></h3>
                                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20" style="background-image: url('images/gulmarg.jpg');"></a>
                            <div class="text">
                                <div class="d-flex align-items-center mb-4 topp">
                                    <div class="one">
                                        <span class="day">11</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">2020</span>
                                        <span class="mos">September</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#">Most Popular Place In India - Gulmarg</a></h3>
                                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-intro ftco-section ftco-no-pt">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <div class="img" style="background-image: url(images/bg_2.jpg);">
                            <div class="overlay"></div>
                            <h2>We Are Pacific A Travel Agency</h2>
                            <p>We can manage your dream building A small river named Duden flows by their place</p>
                            <p class="mb-0"><a href="contact" class="btn btn-primary px-4 py-3">Contact Us</a></p>
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
                                <li class="ftco-animate"><a href=https://www.facebook.com/"><span class="fa fa-facebook"></span></a></li>
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
                                    <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">EaseMyTrip104@gmail.com</span></a></li>
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

    </form>
</body>
</html>
