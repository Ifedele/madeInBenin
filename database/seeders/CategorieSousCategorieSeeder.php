<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSousCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
           'lib_cat'=>'Electroniques',
           'image'=>'categories/PAJpx0QukMZPFe0TfzkFgcu7r7PRoAioi0ZP4RRZ.png',
        ]);
        DB::table('categories')->insert([
            'lib_cat'=>'Décorations & Meubles',
            'image'=>'categories/kYUwOqeXmDm3L6FedxiMvG9zoq7zRNTeQOPptscj.png',
        ]);
        DB::table('categories')->insert([
            'lib_cat'=>'Vêtements & Acéssoires',
            'image'=>'categories/eELWpHKmtABL9QHY0jZCJpmKuX6B1rGdJcHT3DZ2.png',
        ]);
        DB::table('categories')->insert([
            'lib_cat'=>'Alimentations',
            'image'=>'categories/UMMK5ReWb8N1SwsknqLr9jt202axUYP1qjnyBjpH.png',
        ]);


        DB::table('sous_categories')->insert([
            'lib_sous_cat'=>'Téléphone',
            'id_categorie'=>1,
        ]);

        DB::table('sous_categories')->insert([
            'lib_sous_cat'=>'Ordinateurs',
            'id_categorie'=>1,
        ]);
        DB::table('sous_categories')->insert([
            'lib_sous_cat'=>'Smart Watch',
            'id_categorie'=>1,
        ]);
        DB::table('sous_categories')->insert([
           'lib_sous_cat'=>'Meubles',
           'id_categorie'=>2,
        ]);
        DB::table('sous_categories')->insert([
            'lib_sous_cat'=>'Décorations',
            'id_categorie'=>2,
        ]);
        DB::table('sous_categories')->insert([
            'lib_sous_cat'=>'Vêtements',
            'id_categorie'=>3,
        ]);
        DB::table('sous_categories')->insert([
            'lib_sous_cat'=>'Accessoires',
            'id_categorie'=>3,
        ]);
        DB::table('sous_categories')->insert([
            'lib_sous_cat'=>'Fruits',
            'id_categorie'=>4,
        ]);
        DB::table('sous_categories')->insert([
            'lib_sous_cat'=>'Céreales',
            'id_categorie'=>4,
        ]);

    }
}
