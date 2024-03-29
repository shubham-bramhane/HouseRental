<?php

namespace App\Http\Controllers;

use App\Models\OwnerTenantList;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::where('user_id', auth()->id())->get();
        return view('Owner.Property.index', compact('properties'));
    }

    public function create()
    {
        return view('Owner.Property.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required',
            'pincode' => 'required',
            'PropertyName' => 'required',
            'PropertyType' => 'required',
            'status' => 'required',
            'area' => 'required',
            'Beds' => 'required',
            'Baths' => 'required',
            'garage' => 'required',
            'PropertyDesc' => 'required',
            'price' => 'required',
            'amenities' => 'required',
            'propertyImage' => 'required',
        ]);

        $path = $request->file('propertyImage')->store('propertyImage', 'public');

        Property::create([
            'user_id' => auth()->id(),
            'location' => $request->location,
            'pincode' => $request->pincode,
            'PropertyName' => $request->PropertyName,
            'PropertyType' => $request->PropertyType,
            'status' => $request->status,
            'area' => $request->area,
            'Beds' => $request->Beds,
            'Baths' => $request->Baths,
            'garage' => $request->garage,
            'PropertyDesc' => $request->PropertyDesc,
            'price' => $request->price,
            'amenities' => $request->amenities,
            'propertyImage' => $path,
        ]);

        return back()->with('status', 'Property Created Successfully');
    }

    public function show($id)
    {
        $property = Property::find($id);
        return view('Owner.Property.show', compact('property'));
    }

    public function destroy($id)
    {
        $property = Property::find($id);

        if ($property->propertyImage) {
            Storage::disk('public')->delete($property->propertyImage);
        }
        $property->delete();
        return back()->with('status', 'Property Deleted Successfully');
    }

    public function list()
    {
        $property_ids = Property::where('user_id', auth()->id())->pluck('id');

        $lists = collect();

        foreach ($property_ids as $property_id) {
            $owner_tenant_list = OwnerTenantList::with('property')->where('property_id', $property_id)->first();

            if ($owner_tenant_list) {
                $lists[] = $owner_tenant_list;
            }
        }

        return view('Owner.Property.list', compact('lists'));
    }
}
