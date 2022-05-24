<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuxMeasurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
    ];
}
