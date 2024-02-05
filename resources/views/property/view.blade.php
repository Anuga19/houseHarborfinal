@extends('adminNav')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Property Details</b></div>
            <div class="col-md-6">
                <a href="{{ route('properties.index')}}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Property Name</b></label>
            <div class="col-sm-10">
                {{ $property->property_listing_name }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Property Address</b></label>
            <div class="col-sm-10">
                {{ $property->property_address }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Property Image</b></label>
            <div class="col-sm-10">
                <img src="{{ asset('images/' . $property->property_image) }}" width="200" class="img-thumbnail " />
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Price</b></label>
            <div class="col-sm-10">
            {{ $property->property_price  }}
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Property Type</b></label>
            <div class="col-sm-10">
            {{ $property->property_type  }}
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Property City</b></label>
            <div class="col-sm-10">
            {{ $property->property_city  }}
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Description </b></label>
            <div class="col-sm-10">
            {{ $property->property_purpose  }}
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Rooms</b></label>
            <div class="col-sm-10">
            {{ $property->property_rooms  }}
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Bathrooms</b></label>
            <div class="col-sm-10">
            {{ $property->property_bathrooms }}
        </div>
    </div>
</div>

@endsection