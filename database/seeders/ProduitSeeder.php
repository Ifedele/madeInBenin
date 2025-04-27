<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produits')->insert([
            'nom' => 'cornFlakes',
            'description' =>'Céreales parfait pour le petit déjeuner des enfants',
            'prix' =>'2500',
            'qte' =>'50',
            'unite_mesure' =>'boîte',
            'statut' =>'disponible',
            'id_vendeur' =>5,
            'id_type' =>10,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);

        DB::table('produits')->insert([
            'nom' => 'arbustes de rogere',
            'description' =>'plante décorative et odorante',
            'prix' =>'1000',
            'qte' =>'25',
            'unite_mesure' =>'pièces',
            'statut' =>'disponible',
            'id_vendeur' =>3,
            'id_type' =>8,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);

        DB::table('produits')->insert([
            'nom' => 'Diffuseur de senteur',
            'description' =>'Un deux en un, procure une bonne odeur doullet à vos pieces et sers en même temps de décoration. ',
            'prix' =>'5000',
            'qte' =>'50',
            'unite_mesure' =>'pièces',
            'statut' =>'disponible',
            'id_vendeur' =>3,
            'id_type' =>9,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);

        DB::table('produits')->insert([
            'nom' => 'Chaise de bureau',
            'description' =>'Chaise de bureau, coulissant et très conformatbles. Idéales pour les longues journée de trvail.',
            'prix' =>'17000',
            'qte' =>'15',
            'unite_mesure' =>'pièces',
            'statut' =>'disponible',
            'id_vendeur' =>1,
            'id_type' =>5,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);

        DB::table('produits')->insert([
            'nom' => 'Armoire de rangement ',
            'description' =>'Idéale pour tout type de rangement',
            'prix' =>'80000',
            'qte' =>'3',
            'unite_mesure' =>'pièces',
            'statut' =>'disponible',
            'id_vendeur' =>1,
            'id_type' =>5,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);

        DB::table('produits')->insert([
            'nom' => 'Pull-over unisex',
            'description' =>'Faits avec du coton ultra doux, parfait pour vous tenir au chaud',
            'prix' =>'1500',
            'qte' =>'20',
            'unite_mesure' =>'pièces',
            'statut' =>'disponible',
            'id_vendeur' =>4,
            'id_type' =>1,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);

        DB::table('produits')->insert([
            'nom' => 'Pantalon en jeans',
            'description' =>'Oversize, street-wear, baggy',
            'prix' =>'8000',
            'qte' =>'25',
            'unite_mesure' =>'pièces',
            'statut' =>'disponible',
            'id_vendeur' =>4,
            'id_type' =>2,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);

        DB::table('produits')->insert([
            'nom' => 'Iphone 14 PRO',
            'description' =>'128gb',
            'prix' =>'350000',
            'qte' =>'50',
            'unite_mesure' =>'pièces',
            'statut' =>'disponible',
            'id_vendeur' =>2,
            'id_type' =>7,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);

        DB::table('produits')->insert([
            'nom' => 'Lunnettes de soleil',
            'description' =>'.....',
            'prix' =>'5000',
            'qte' =>'10',
            'unite_mesure' =>'pièces',
            'statut' =>'disponible',
            'id_vendeur' =>4,
            'id_type' =>3,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);

        DB::table('produits')->insert([
            'nom' => 'Miss D',
            'description' =>'Sac de marques Dior tres tendances',
            'prix' =>'15000',
            'qte' =>'50',
            'unite_mesure' =>'pièces',
            'statut' =>'disponible',
            'id_vendeur' =>4,
            'id_type' =>4,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);

        DB::table('produits')->insert([
            'nom' => 'Cathleen maurenne',
            'description' =>'sac en fourrure ',
            'prix' =>'10000',
            'qte' =>'12',
            'unite_mesure' =>'pièces',
            'statut' =>'disponible',
            'id_vendeur' =>4,
            'id_type' =>4,
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);


    }
}
