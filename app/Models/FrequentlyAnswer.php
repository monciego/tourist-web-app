<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequentlyAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'faq_answers',
    ];

    public function frequently_question() {
        return $this->belongsTo(FrequentlyQuestion::class, 'question_id');
    }
}
