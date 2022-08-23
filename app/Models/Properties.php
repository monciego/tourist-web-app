<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'property_name'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function business_owner() { // property information / business information
        return $this->hasOne(BusinessOwners::class, 'property_id');
    }

    public function business_legal_documents() {
        return $this->hasMany(BusinessLegalDocuments::class, 'property_id');
    }

}
