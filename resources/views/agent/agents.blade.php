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
            <h2>AGENT MANAGEMENT</h2>

            @if($message = Session::get('success'))
            <div class="alert alert-succcess">
                {{ $message }}
            </div>
            @endif

            
            <div class="card-body">
                        <a href="{{ url('/agent/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                        <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>License Number</th>
                        <th>Joined Date</th>

                    </tr>
                </thead>
                @if(isset($data) && count($data) > 0)

                @foreach($data as $row)
                <tr>
                    <td>{{ $row->id}}</td>
                    <td><img src="{{ asset('images/' .$row->property_image) }}" width="95"></td>
                    <td>{{ $row->firstname }}</td>
                    <td>{{ $row->lastname }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->address }}</td>
                    <td>{{ $row->image }}</td>
                    <td>{{ $row->license }}</td>
                    <td>{{ $row->username }}</td>
                    <td>{{ $row->password }}</td>
                    <td>{{ $row->created_at }}</td>
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
                        </div>
  
                    </div>
        </main>
    </div>
</div>

@endsection