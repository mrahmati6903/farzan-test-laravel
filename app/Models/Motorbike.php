<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorbike extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'weight',
        'price',
        'image'
    ];
}
