<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_title',
        'film_certificate_id',
        'film_description',
        'film_image',
        'film_price',
        'filmstar_rating',
        'film_release_date',
    ];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'film_certificate_id');
    }
}
