<?php

namespace App\Http\Controllers;

use App\Models\OwnerTenantList;
use App\Models\Property;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function booked($id)
    {
        $property = Property::find($id);

        if ($property->isPropertyBooked() || $property->HasBooked()) {
            return back()->with('status', 'Property Already Booked');
        }

        if (auth()->user()->type == 'owner') {
            return back()->with('status', 'You are not authorized to book property');
        }

        OwnerTenantList::create([
            'property_id' => $id,
            'user_id' => auth()->id(),
        ]);

        return back()->with('status', 'Property Booked Successfully');
    }

    public function cancel($id)
    {
        $list = OwnerTenantList::find($id);

        $list->delete();

        return back()->with('status', 'Property Cancelled Successfully');
    }
}
