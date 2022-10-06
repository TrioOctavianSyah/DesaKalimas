<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'tb_kabupaten';

    public function kecamatan(){
        return $this->hasMany(Kecamatan::class, 'id');
    }
}
