<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterUnclassifiedTourist extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_name',
        'contact_person',
        'date_registered',
        'time_in',
        'time_out',
        'environment_fee',
        'entrance_fee',
        'number_of_children',
        'number_of_adults',
        'number_of_infants',
    ];

}
