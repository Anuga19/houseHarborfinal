<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = ['property_image', 'property_address', 'property_listing_name','property_price', 'property type', 'property_city', 'property_purpose', 'property_rooms', 'property_bathrooms' ];
}
