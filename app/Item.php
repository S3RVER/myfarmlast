<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model{
    protected $fillable = [
        'title',
        'content',
        'is_list',
        'category_id',
        'image_path'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
