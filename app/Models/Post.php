<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    //Relación uno a muchos inversa

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Relación muchos a muchos

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relación uno a uno polimorfica

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
