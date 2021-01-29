<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontUser extends Model
{
    use HasFactory;

    // make relation with user table

    public function UserPosts()
    {
        $this->hasMany('App\Models\Information', 'Author', 'id');
    }
}
