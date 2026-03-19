<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manas extends Model
{
    use HasFactory;
    protected $table = 'manas';
    protected $fillable = [
        'title',
        'manas_pdf',
        'year',
    ];
}
