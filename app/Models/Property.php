<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Image(): string
    {
        return $this->propertyImage ? asset('storage/' . $this->propertyImage) : asset('img/no-image.png');
    }

    public function isPropertyBooked(): bool
    {
        return OwnerTenantList::where('property_id', $this->id)->where('user_id', auth()->id())->exists();
    }

    public function HasBooked(): bool
    {
        return OwnerTenantList::where('property_id', $this->id)->exists();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lists()
    {
        return $this->hasMany(OwnerTenantList::class);
    }
}
