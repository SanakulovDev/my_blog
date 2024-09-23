<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id', 'category_id', 'description', 'published_at', 'is_featured'];
    
   
    protected $casts = [
        'title' => 'array',
        'body'  => 'array',
        'description' => 'array',
    ];

    // Title uchun funksiya
    public function getTitle($locale = null)
    {
        $locale = $locale ?: app()->getLocale(); // Hozirgi tilni olish

        $title = is_array($this->title) ? $this->title : json_decode($this->title, true);

        return $title[$locale] ?? $title['en'];
    }

    // Description uchun funksiya
    public function getDescription($locale = null): string
    {
        $locale = $locale ?: app()->getLocale();
        
        $description = is_array($this->description)? $this->description : json_decode($this->description, true);
        return $description[$locale] ?? $description['en'];
    }

    // Body uchun funksiya
    public function getBodyContent($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        return $this->body['content'][$locale] ?? $this->body['content']['en'];
    }
    
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
