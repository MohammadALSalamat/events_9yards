<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model
{
    use HasFactory;
    public function projectSections()
    {
        # code...
        return $this->belongsTo('App\Models\ProjectSection','id');
    }

}
