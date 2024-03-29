<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'user_id',
        'review',
        'rating',
    ];

    public function properties() {
        return $this->belongsTo(Properties::class, 'property_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
