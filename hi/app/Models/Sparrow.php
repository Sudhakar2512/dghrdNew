<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparrow extends Model
{
    use HasFactory;
    
    protected $table = 'sparrow';
    protected $fillable = [
        'tab',
        'tittle',
        'date',
        'pdf',
    ];
}
