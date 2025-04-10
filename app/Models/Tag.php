<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    const TAG = 'tag';
    const ID = 'id';

    protected $fillable = [
        self::TAG
    ];
    
}
