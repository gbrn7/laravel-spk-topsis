<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alternative;

class Alternative extends Model
{
    use HasFactory;

    protected $table = 'alternatives';

    protected $fillable = [
        'id',
        'name',
    ];
}
