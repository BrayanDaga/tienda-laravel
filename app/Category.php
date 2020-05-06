<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
        'id','name', 'slug', 'description','color'
    ];

    public $timestamps = false;

    public function producsts()
    {
        return $this->hasMany('App\Product');
    }
}
