<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rajyabhasha extends Model
{
    use HasFactory;
    protected $table = 'rajyabhasha';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
