<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessOwners extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'business_description',
        'business_year_founded',
        'business_file',
        'business_tags'
    ];
}
