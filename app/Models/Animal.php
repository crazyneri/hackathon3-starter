<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Animal extends Model
{
    use HasFactory;

    public function image()
    {
        
        return $this->belongsTo('App\Models\Image');
    }

    public function owner()
    {
        
        return $this->belongsTo('App\Models\Owner');
    }
}
