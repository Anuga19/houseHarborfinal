@extends('adminNav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-30">
            <div class="card">
            @if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="formbgcolor">
<form action="" method="POST" enctype="multipart/form-data" class="local-form content-box">
    @csrf

    <div class="form-group">
        <label class="control-label" for="inputFirstName">First Name*</label>
        <div class="controls">
            <input required="" type="text" name="firstname" value="" class="form-control" id="inputFirstName" placeholder="First Name">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="inputLastName">Last Name*</label>
        <div class="controls">
            <input required="" type="text" name="lastname" value="" class="form-control" id="inputLastName" placeholder="Last Name">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="inputEmail">Email*</label>
        <div class="controls">
            <input required="" type="email" name="email" value="" class="form-control" id="inputEmail" placeholder="Email">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="inputAddress">Address*</label>
        <div class="controls">
            <input required="" type="text" name="address" value="" class="form-control pac-target-input" id="inputAddress" placeholder="Address" autocomplete="off">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="inputImage">Image</label>
        <div class="controls">
            <input type="file" name="image" value="" id="inputImage" class="form-control" placeholder="Image">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="inputLicense">License*</label>
        <div class="controls">
            <input required="" type="text" name="license" value="" class="form-control" id="inputLicense" placeholder="License">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="inputUsername">Username*</label>
        <div class="controls">
            <input required="" type="text" name="username" value="" class="form-control" id="inputUsername" placeholder="Username">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="inputPassword">Password*</label>
        <div class="controls">
            <input required="" type="password" name="password" value="" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>

    <!-- Add other fields as needed -->

    <hr>

    <div class="form-group text-center">
        <div class="controls">
            <button type="submit" class="btn btn-success" value="Add">Add</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </div>
</form>

</div>
                

            </div>
        </div>
    </div>
</div>
@endsection