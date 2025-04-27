<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'lib_type' => 'Pull-over',
            'id_sous_categorie' =>6,
        ]);

        DB::table('types')->insert([
            'lib_type' => 'Jeans',
            'id_sous_categorie' =>6,
        ]);

        DB::table('types')->insert([
            'lib_type' => 'Lunettes de soleil',
            'id_sous_categorie' =>7,
        ]);

        DB::table('types')->insert([
            'lib_type' => 'Sacs',
            'id_sous_categorie' =>7,
        ]);

        DB::table('types')->insert([
            'lib_type' => 'mobilier',
            'id_sous_categorie' =>4,
        ]);

        DB::table('types')->insert([
            'lib_type' => 'HP laptop',
            'id_sous_categorie' =>2,
        ]);

        DB::table('types')->insert([
            'lib_type' => 'Apple phone',
            'id_sous_categorie' =>1,
        ]);

        DB::table('types')->insert([
            'lib_type' => 'Plantes',
            'id_sous_categorie' =>5,
        ]);

        DB::table('types')->insert([
            'lib_type' => 'Senteurs',
            'id_sous_categorie' =>5,
        ]);

        DB::table('types')->insert([
            'lib_type' => 'Céréales',
            'id_sous_categorie' =>9,
        ]);

    }
}
