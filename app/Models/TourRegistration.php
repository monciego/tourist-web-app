<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourRegistration extends Model
{
    use HasFactory;

    public function getDates()
{
    //define the datetime table column names as below in an array, and you will get the
    //carbon objects for these fields in model objects.

    return array('tour_date');
}

    protected $fillable = [
        'property_id',
        'user_id',
        'tour_code',
        'tour_date',
        'tour_contact_person',
        'tour_contact_number',
        'tour_email',
        'tour_type',
        'number_of_adults',
        'number_of_children',
        'number_of_infants',
        'number_of_foreigner',
        'tour_message',
        'verified',
        'cancel',
        'status',
        'verified_by',
        // unclassified
        'property_name',
        'time_in',
        'time_out',
        'environment_fee',
        'entrance_fee',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function property() {
        return $this->belongsTo(Properties::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false) {
              $query->where('tour_code', request('search'));
        }

     /*    if($filters['tag'] ?? false) {

        } */
    }
}
