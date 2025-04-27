<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AcheteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('acheteurs')->insert([
            'nom' => 'GNANKPO',
            'prenom' =>'Gisèle',
            'tel' =>'2290197123456',
            'city_id' =>8095,
            'idUser' =>3,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
    }
}
