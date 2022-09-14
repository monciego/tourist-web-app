<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerProperties extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'feature',
        'property_tag',
        'property_est',
        'property_address',
        'image_one',
        'image_two',
        'image_three',
        'image_four',
        'images',
        'property_description',
        'property_offers',
        'property_details',
        'property_price'
    ];
}
