<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pivot extends Model
{
    use HasFactory;

    protected $table = 'pivots';

    protected $fillable = [
        'tanggal',
        'open',
        'high',
        'low',
        'close',
        'category',
    ];
}
