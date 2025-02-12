<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clinic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'ein_documentation',
        'address',
        'neighborhood',
        'city',
        'state',
        'zipcode',
        'phone',
        'specialty',
    ];
}
