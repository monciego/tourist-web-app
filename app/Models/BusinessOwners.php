<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessOwners extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name_of_registrant',
        'owner_address',
        'owner_gender',
        'owner_date_of_birth',
        'owner_contact_number',
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }
}
