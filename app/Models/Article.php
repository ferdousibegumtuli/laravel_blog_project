<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    const TITLE = 'title';
    const DESCRIPTION = 'description';
    const USER_ID = 'user_id';
    const CATEGORY_ID = 'category_id';
    const TAG_ID = 'tag_id';
    const STATUS = 'status';
    const IMAGE = 'image';



    protected $fillable = [
        self::TITLE,
        self::DESCRIPTION,
        self::USER_ID,
        self::CATEGORY_ID,
        self::TAG_ID,
        self::STATUS,
        self::IMAGE,
    ];



    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }

    public function user(): BelongsTo
    {
        return ($this->belongsTo(User::class));
    }
}
