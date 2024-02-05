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

<!-- Filter Section -->
<section class="container my-4">
    <h2 class="text-center mb-4">Filter Properties</h2>

    <!-- Filter Form -->
    <form action="{{ route('propertyview.filter') }}" method="GET">
        @csrf
        <div class="row g-3">
            <div class="col-md-4">
                <label for="propertyType" class="form-label">Property Type</label>
                <select class="form-select" id="propertyType" name="propertyType">
                    <option selected>All Types</option>
                    <option value="sale">For Sale</option>
                    <option value="rent">For Rent</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="minPrice" class="form-label">Min Price</label>
                <input type="number" class="form-control" id="minPrice" name="minPrice" placeholder="Min Price">
            </div>
            <div class="col-md-4">
                <label for="maxPrice" class="form-label">Max Price</label>
                <input type="number" class="form-control" id="maxPrice" name="maxPrice" placeholder="Max Price">
            </div>
            <!-- Add more filter options as needed -->

            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Apply Filters</button>
            </div>
        </div>
    </form>
</section>

<!-- Property Listings Section -->
<section class="container my-5">
    <h2 class="text-center">Explore Our Properties</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($filteredData as $property)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/' . $property->property_image) }}" class="card-img-top" alt="Property Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $property->property_listing_name }}</h5>
                    <p class="card-text">Address: {{ $property->property_address }}, {{ $property->property_city }}</p>
                    <p class="card-text">Price: ${{ $property->property_price }}</p>
                    <p class="card-text">Bedrooms: {{ $property->property_rooms }} | Bathrooms: {{ $property->property_bathrooms }}</p>
                    <a href="{{ route('properties.show', $property->id) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
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