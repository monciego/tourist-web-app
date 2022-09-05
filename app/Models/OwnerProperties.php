<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerProperties extends Model
{
    use HasFactory;

    private $fillable = [
        'property_id',
        'image_one',
        'property_tag',
        'property_est',
        'property_address',
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
