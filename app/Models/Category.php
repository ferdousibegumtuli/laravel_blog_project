<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    const CATEGORY = 'category';
    const ID = 'id';

    protected $fillable = [
        self::CATEGORY 
    ];
}
