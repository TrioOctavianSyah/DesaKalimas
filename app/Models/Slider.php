<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    // protected $fillable =[
        //     'title',
        //     'decsription',
        //     'image',
        //     'status',
        // ];
        use HasFactory;
        protected $table='tb_slider';
}
