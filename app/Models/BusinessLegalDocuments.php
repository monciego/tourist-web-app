<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Property;

class BusinessLegalDocuments extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'legal_document_name',
        'legal_document_file',
    ];

    public function property() {
        return $this->belongsTo(Properties::class);
    }
}
