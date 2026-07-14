<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'slug', 
        'description', 
        'image',
        'image_2',            // Kolom untuk foto project
        'tech_stack', 
        'category', 
        'project_url', 
        'github_url', 
        'is_featured', 
        'sort_order'
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'is_featured' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at', 'desc');
    }
}