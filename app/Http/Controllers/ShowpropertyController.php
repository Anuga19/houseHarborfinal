<?php


namespace App\Http\Controllers;

use App\Models\Property;

use Illuminate\Http\Request;


class ShowpropertyController extends Controller
{
    public function index()
    {
        $data = Property::all();
        return view('propertyview', ['filteredData' => $data]);
    }


    public function filterProperties(Request $request)
    {
        // Validate the form data
        $request->validate([
            'propertyType' => 'nullable|in:sale,rent',
            'minPrice' => 'nullable|numeric|min:0',
            'maxPrice' => 'nullable|numeric|min:' . ($request->input('minPrice') ?? 0),
        ]);

        // Build the query based on the filter parameters
        $query = Property::query();

        if ($request->filled('propertyType')) {
            $query->where('property_type', $request->input('propertyType'));
        }

        if ($request->filled('minPrice')) {
            $query->where('property_price', '>=', $request->input('minPrice'));
        }

        if ($request->filled('maxPrice')) {
            $query->where('property_price', '<=', $request->input('maxPrice'));
        }

        // Get the filtered data
        $filteredData = $query->latest()->paginate(5);

        return view('propertyview', compact('filteredData'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
