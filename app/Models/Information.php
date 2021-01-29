<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    public function Posts()
    {
        $this->belongsTo(['App\Models\FrontUser', 'Author', 'id']);
    }
}
