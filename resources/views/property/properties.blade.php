@extends('adminNav')

@section('content')

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar side-menu">
            <section class="sider-menu">
                <img src="{{ asset('images/Profile-pic.png') }}" alt="Profile Picture" class="profile-pic">
                <div class="profile-info">
                    <p>Anuga</p>
                    <p>anugak200@gmail.com</p>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item menu-item">
                        <a class="nav-link active" href="{{url('/home')}}">Dashboard</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="{{url('pages.properties')}}">Properties</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="#">Users</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="#">Analytics</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="{{ url('/analytics') }}">Other Services</a>
                    </li>
                </ul>
            </section>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="listing">
            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div> -->
            <h2>PROPERTIES</h2>

            @if($message = Session::get('success'))
            <div class="alert alert-succcess">
                {{ $message }}
            </div>
            @endif

            <div class="d-flex justify-content-between align-items-center mb-3" id="mylisting">
                <h4>My Listings</h4>
                <a href="{{ route('properties.create') }}" class="btn btn-primary">Add Listing</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Listing Name</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th>City</th>
                        <th>Purpose</th>
                        <th>Rooms</th>
                        <th>Bathrooms</th>

                    </tr>
                </thead>
                @if(isset($data) && count($data) > 0)

                @foreach($data as $row)
                <tr>
                    <td>{{ $row->id}}</td>
                    <td><img src="{{ asset('images/' .$row->property_image) }}" width="95"></td>
                    <td>{{ $row->property_address }}</td>
                    <td>{{ $row->property_listing_name }}</td>
                    <td>{{ $row->property_price }}</td>
                    <td>{{ $row->property_type }}</td>
                    <td>{{ $row->property_city }}</td>
                    <td>{{ $row->property_purpose }}</td>
                    <td>{{ $row->property_rooms }}</td>
                    <td>{{ $row->property_bathrooms }}</td>
                    <td>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('properties.show', $row->id) }}" class="btn btn-primary btn-sm mr-2">View</a>
                            <a href="{{ route('properties.edit', $row->id) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                            <form method="post" action="{{ route('properties.destroy', $row->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="10" class="text-center">No data found</td>
                </tr>
                @endif
            </table>
           
        </main>
    </div>
</div>

@endsection