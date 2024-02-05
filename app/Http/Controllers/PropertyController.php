<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Property::latest()->paginate(5);
        return view('property.properties', compact('data'))->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'property_address'           => 'required',
            'property_listing_name'           => 'required',
            'property_price'           => 'required',
            'property_type'           => 'required',
            'property_city'           => 'required',
            'property_purpose'           => 'required',
            'property_rooms'           => 'required',
            'property_bathrooms'           => 'required',
            'property_image'           => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4048|dimensions:min_width=100,min_height=100,max-width=1000,max-height=1000',
        ]);

        $file_name = time() . '.' . request()->property_image->getClientOriginalExtension();

        request()->property_image->move(public_path('images'), $file_name);

        $property = new Property;

        $property->property_address = $request->property_address;
        $property->property_listing_name = $request->property_listing_name;
        $property->property_price= $request->property_price;
        $property->property_type = $request->property_type;
        $property->property_city = $request->property_city;
        $property->property_purpose = $request->property_purpose;
        $property->property_rooms= $request->property_rooms;
        $property->property_bathrooms = $request->property_bathrooms;
        $property->property_image = $file_name;

        $property->save();

        return redirect()->route('property.properties')->with('success', 'Property Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        return view('property.view', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $request->validate([
            'property_address'           => 'required',
            'property_listing_name'           => 'required',
            'property_price'           => 'required',
            'property_type'           => 'required',
            'property_city'           => 'required',
            'property_purpose'           => 'required',
            'property_rooms'           => 'required',
            'property_bathrooms'           => 'required',
            'property_image'           => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4048|dimensions:min_width=100,min_height=100,max-width=1000,max-height=1000',
        ]);

        $property_image = $request->hidden_property_image;

        if($request->property_image != '')
        {
            $property_image = time() . '.' . request()->property_image->
                getClientOriginalExtension();

            request()->property_image->move(public_path('images'), $property_image);
        }

        $property = Property::find($request->hidden_id);

        $property->property_images = $property_image;
        $property->property_address = $request->property_address;
        $property->property_listing_name = $request->property_listing_name;
        $property->property_price= $request->property_price;
        $property->property_type = $request->property_type;
        $property->property_city  = $request->property_city ;
        $property->property_purpose   = $request->property_purpose ;
        $property->property_rooms  = $request->property_rooms ;
        $property->property_bathrooms = $request->property_bathrooms ;

        $property->save();

        return redirect()->route('property.properties')->with('success', 'Property Data has been Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('property.properties')->with('success', 'Property Has been Deleted Successfully');
    }
}
