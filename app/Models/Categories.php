<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $with = ['properties'];

    protected $fillable = [
        'category_name'
    ];

    public function properties() {
        return $this->hasMany(Properties::class, 'category_id');
    }
}
