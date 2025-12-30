<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $with = ['postCategory'];

    protected $fillable = [
        'post_category_id',
        'title',
        'slug',
        'post_date',
        'publish',
        'cover',
        'content',
    ];

    public function postCategory()
    {
        return $this->belongsTo(PostCategory::class);
    }

    public function getPostDateIndoAttribute()
    {
        return Carbon::parse($this->post_date)->translatedFormat('d F Y');
    }
}
