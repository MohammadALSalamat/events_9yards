<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function Products()
    {
        # code...
        return $this->hasMany('App\Models\Product' , 'cat_id');
    }
}
