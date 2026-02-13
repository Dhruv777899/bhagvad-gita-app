<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chapter extends Model
{
    protected $fillable = [
        'chapter_number',
        'name',
        'name_transliterated',
        'name_translated',
        'verses_count',
        'summary',
    ];

    public function verses(): HasMany
    {
        return $this->hasMany(Verse::class);
    }
}
