<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apart extends Model
{
    protected $fillable = ['owner_name', 'owner_email','owner_phone','owner_address','owner_country','address_apart','number_home','number_flat','price_apart','total_area','living_space','room_apart','type_of_home','floor_apart', 'image'];
}
