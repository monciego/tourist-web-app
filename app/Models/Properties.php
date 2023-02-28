<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'property_name',
    ];


    public function scopeFilter($query, array $filters)
    {
        if($filters['category'] ?? false) {
              $query->where('category_id', 'like', '%' . request('category') . '%');
        }
     /*    if($filters['tag'] ?? false) {

        } */
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function business_legal_documents() {
        return $this->hasMany(BusinessLegalDocuments::class, 'property_id');
    }

    public function properties_details() {
        return $this->hasOne(OwnerProperties::class, 'property_id');
    }

    public function category() {
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Categories::class);
    }

    public function frequently_questions() {
        return $this->hasMany(FrequentlyQuestion::class, 'property_id');
    }

    public function tour_registration() {
        return $this->hasOne(TourRegistration::class, 'property_id' );
    }
}
