<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon.ico')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon.ico')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.ico')}}">
    <link rel="manifest" href="public/favicon.ico">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/customstyle.css'])



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center  " id="navpad">

        <nav class="navbar navbar-expand-lg navbar-dark " style="padding: 0px;" id="navbgcolor">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}" style="font-style: italic;">HOUSEHARBOR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 20px; font-size: 17px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home/properties') }}">Properties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Become an agent?</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="text-decoration:none; color:blue">Profile</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" id="bgbutton" style="text-decoration: none; color:white">Log in</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline " id="bgbutton" style="text-decoration: none; color:white">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </nav>


        <header class="masthead" style="background-image: url('/images/house01.jpg'); height: 620px; margin-bottom :100px;" class="img-fluid">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="my-5 text-light" style="font-size:60px; font-weight:bolder" >TRANSFORMING HOUSES INTO HOMES, ONE DREAM AT A TIME.</h1>
                            <h5 class="my-5 text-dark" style="margin:0px; font-size: 25px;">Sign in for a more personalized experience</h5>
                            <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <!-- Email address input-->
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control form-control-lg" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" style="margin: auto; width: 90%; padding: 10px;" />
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                                    </div>
                                    <div class="col-auto"><button class="btn btn-primary btn-lg " id="submitButton" type="submit">Submit</button></div>
                                </div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="features-icons  text-center" style="margin-top: 60px; padding: 50px 50px 75px 50px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                            <h3>Buying Properties</h3>
                            <p class="lead mb-0">When it comes to buying properties, our website is your ultimate resource. We offer an extensive database of listings, expert insights, and personalized assistance to help you find the perfect home that aligns with your preferences and budget.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                            <h3> Selling Properties</h3>
                            <p class="lead mb-0">Selling your property has never been easier. Our website provides you with a platform to showcase your home to a wide audience. We offer marketing expertise, experienced agents, and a seamless selling process to maximize your property's value and ensure a smooth transaction.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                            <h3>Renting Properties</h3>
                            <p class="lead mb-0">Looking for a rental property? Our website is your go-to destination. Explore our diverse range of rental listings, access tenant resources, and connect with landlords or property managers. We simplify the rental process, helping you find a place to call home with ease.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Image Showcases-->
        <section class="showcase style" style="margin: 45px;">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image:  url('/images/detachedhouse.jpg'); background-repeat: no-repeat"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text" style="padding: 120px;">
                        <h2>Detached Houses</h2>
                        <p class="lead mb-0" style="padding: 20px;"> Detached houses offer a private oasis with yards for your relaxation and creativity. Explore our diverse range of designs to find your dream home.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image:  url('/images/apartments.jpg') ; background-repeat: no-repeat"></div>
                    <div class="col-lg-6 my-auto showcase-text" style="padding: 120px;">
                        <h2>Apartments</h2>
                        <p class="lead mb-0">Apartments provide city living with convenience and community. From studios to penthouses, we have options to match your lifestyle.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/images/condos.jpg') ; background-repeat: no-repeat"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text" style="padding: 120px;">
                        <h2>Condominiums</h2>
                        <p class="lead mb-0">Enjoy homeownership without exterior maintenance. Condos offer a sense of community and access to amenities. Find your perfect fit today!</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials-->
        <section class="testimonials text-center bg-light" style="margin-bottom:50px; padding:50px">
            <div class="container">
                <h2 class="mb-5">What people are saying...</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="/images/user03.png" alt="..." />
                            <h5>Dilshan Fernando</h5>
                            <p class="font-weight-light mb-0"> "I couldn't believe how easy it was to find my perfect home on this website. The user-friendly interface and extensive listings made my house hunting a breeze. I'm now settled in my dream home, and I owe it all to this fantastic platform!"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="/images/user03.png" alt="..." />
                            <h5>Nadeesha Perera</h5>
                            <p class="font-weight-light mb-0"> "As a first-time homebuyer, I was nervous about the whole process. But this website provided me with all the information I needed, from mortgage calculators to neighborhood insights. The virtual tours were a game-changer, and thanks to this site, I'm now a proud homeowner!"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="/images/user03.png" alt="..." />
                            <h5> Kavindu Silva</h5>
                            <p class="font-weight-light mb-0"> "Selling my home was a big decision, but listing it on this website was the best choice I made. The marketing support and exposure they provided helped me find a buyer quickly, and the entire selling process was smooth and stress-free. Highly recommended!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer navbar-dark bg-dark" style="padding: 50px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2" id="nounder">
                            <li class="list-inline-item"><a href="#!">Home</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Buy</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Sell</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Rent</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Help</a></li>
                        </ul>
                        <p class="text-white small mb-4 mb-lg-0 ">&copy; Your Website 2023. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>