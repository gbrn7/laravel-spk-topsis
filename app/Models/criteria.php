<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class criteria extends Model
{
    use HasFactory;

    protected $table = 'criteria';

    protected $fillable = [
        'name',
        'weight',
        'benefited',
    ];
}
