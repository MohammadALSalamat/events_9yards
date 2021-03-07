<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerImages extends Model
{
    use HasFactory;
    public function PartnersSections()
    {
        # code...
        return $this->belongsTo('App\Models\PartnerSection','id');
    }
}
