<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $table = 'f_a_q_categories';

    public function faqs()
    {
        return $this->hasMany(FAQ::class, 'f_a_q_category_id');
    }
}