<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessLegalDocuments extends Model
{
    use HasFactory;

    protected $fillable = [
        'legal_document_name',
        'legal_document_file',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
