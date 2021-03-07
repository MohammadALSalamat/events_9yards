<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectImages;

class ProjectSection extends Model
{
    use HasFactory;
    public function projectImages()
    {

        return $this->hasMany('App\Models\ProjectImages', 'sec_id');
    }
}
