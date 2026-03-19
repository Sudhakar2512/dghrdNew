<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HRCon extends Model
{
    use HasFactory;
    protected $table = 'h_r_cons';
    protected $fillable = [
        'title',
        'date',
        'pdf',
    ];
}
