<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class vendeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vendeurs')->insert([
            'nom' => 'Zonnon',
            'prenom' =>'Eustache',
            'raison_social' =>'Wanyinan',
            'telephone' =>'2290197123456',
            'logo' =>'default-logo.png',
            'photo_profile' =>'default-profile.png',
            'city_id' =>8095,
            'idUser' =>1,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
    }
}
