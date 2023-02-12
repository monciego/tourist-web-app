<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequentlyQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'faq_questions'
    ];

    public function frequently_answer() {
        return $this->hasOne(FrequentlyAnswer::class, 'question_id');
    }
}
