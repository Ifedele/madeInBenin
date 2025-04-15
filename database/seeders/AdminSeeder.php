<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'nom' => 'Tchobo',
            'prenom' =>'Nina',
            'telephone' =>'2290197123456',
            'photo_profile' =>'default-profile.png',
            'idUser' =>2,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
    }
}
