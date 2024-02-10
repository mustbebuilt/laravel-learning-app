<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'filmTitle',
        'filmCertificate_id',
        'filmDescription',
        'filmImage',
        'filmPrice',
        'starRating',
        'releaseDate',
    ];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'filmCertificate_id');
    }
}
