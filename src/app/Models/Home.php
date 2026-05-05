<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

    protected $fillable = [
        'title',
        'description',
        'price',
        'is_active',
    ];

    protected $casts = [
        'price' => MoneyCast::class,
        'is_active' => 'boolean',
    ];
}
