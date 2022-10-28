<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'tb_profile';

    public function artikel (){
    return $this->hasMany(Artikel::class,'id');
    }

}
