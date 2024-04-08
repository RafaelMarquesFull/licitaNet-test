<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $primaryKey = 'code_category';
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'sticker'
    ];
}
