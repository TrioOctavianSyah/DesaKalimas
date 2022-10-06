<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_admin')->insert([
            'username' => 'desakalimas',
            'password' => Hash::make('desakalimas2022'),
            'nama' => 'Desa Kalimas',
            'profile_pic' => 'untan.png',

        ]);
    }
}
