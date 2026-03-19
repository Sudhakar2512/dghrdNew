<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regularization extends Model
{
    use HasFactory;
    
    protected $table = 'regularizations';
    protected $fillable = [
        'title',
        'date',
        'pdf',
    ];
}
