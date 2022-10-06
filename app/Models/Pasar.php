<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasar extends Model
{
    protected $table = 'tb_pasar';

    public function desa(){
        return $this->belongsTo(Desa::class, 'id_desa');
    }
}
