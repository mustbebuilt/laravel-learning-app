<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'filmCertificate',
        'filmCertDescription',
    ];

    public function films()
    {
        return $this->hasMany(Film::class, 'filmCertificate_id');
    }
}
