<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
        'f_a_q_category_id',
    ];

    protected $table = 'f_a_q_s';

    public function category()
    {
        return $this->belongsTo(FAQCategory::class, 'f_a_q_category_id');
    }
}