<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'published_at',
    ];
    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $dates = ['published_at'];

    // Auto-generate slug if empty before saving
    public static function booted()
    {
        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = self::uniqueSlug($blog->title);
            }
        });

        static::updating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = self::uniqueSlug($blog->title, $blog->id);
            }
        });
    }

    public static function uniqueSlug($title, $ignoreId = null)
    {
        $base = Str::slug($title);
        $slug = $base;
        $i = 1;
        while (self::where('slug', $slug)->when($ignoreId, fn($q) => $q->where('id','!=',$ignoreId))->exists()) {
            $slug = $base . '-' . $i++;
        }
        return $slug;
    }
}
