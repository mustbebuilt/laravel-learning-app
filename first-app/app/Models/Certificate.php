<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_certificate',
        'film_cert_description',
    ];

    public function films()
    {
        return $this->hasMany(Film::class, 'certificate_id');
    }
}
