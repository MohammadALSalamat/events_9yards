<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerSection extends Model
{
    use HasFactory;
    public function partenerImages()
    {

        return $this->hasMany('App\Models\PartnerImages', 'sec_id');
    }
}
