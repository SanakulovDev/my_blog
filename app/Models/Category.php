<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $filliable = ['created_by', 'name', 'description'];

    protected $table = 'category';

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
    ];

    public function getName($locale = null)
    {
        $locale = $locale ?: app()->getLocale(); // Default tilni olish
        return $this->name[$locale] ?? $this->name['en']; // 'en' default til
    }

    public function getDescription($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        return $this->description[$locale] ?? $this->description['en'];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
