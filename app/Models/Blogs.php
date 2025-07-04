<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [
        "title",
        "description",
        "categoryId",
        "userId",
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    
}
