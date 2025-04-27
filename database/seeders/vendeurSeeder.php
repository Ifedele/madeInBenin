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

      'nom' => 'ZONNON',

      'prenom' =>'Eustache',

      'raison_social' =>'Wanyinan Meubles',

      'telephone' =>'(+229)0197123456',

      'logo' =>'logo.defaut.jpg',

      'photo_profile' =>'photo_profil/8.jpg',

      'city_id' =>8095,

      'idUser' =>1,

      'created_at' =>now(),

      'updated_at' =>now(),

    ]);





    DB::table('vendeurs')->insert([

      'nom' => 'AGBAOUNGBA',

      'prenom' =>'Justine',

      'raison_social' =>'ElectroTech',

      'telephone' =>'(+229)0192323456',

      'logo' =>'logo.defaut.jpg',

      'photo_profile' =>'photo_profil/1.jpg',

      'city_id' =>8095,

      'idUser' =>4,

      'created_at' =>now(),

      'updated_at' =>now(),

    ]);



    DB::table('vendeurs')->insert([

      'nom' => 'OGOU',

      'prenom' =>'Franck',

      'raison_social' =>'FranckDéco',

      'telephone' =>'(+229)0192323486',

      'logo' =>'logo.defaut.jpg',

      'photo_profile' =>'photo_profil/2.jpg',

      'city_id' =>8095,

      'idUser' =>5,

      'created_at' =>now(),

      'updated_at' =>now(),

    ]);



    DB::table('vendeurs')->insert([

      'nom' => 'BOUBE',

      'prenom' =>'Marianne',

      'raison_social' =>'Marie Fashion',

      'telephone' =>'(+229)0197323486',

      'logo' =>'logo.defaut.jpg',

      'photo_profile' =>'photo_profil/6.jpg',

      'city_id' =>8095,

      'idUser' =>6,

      'created_at' =>now(),

      'updated_at' =>now(),

    ]);



    DB::table('vendeurs')->insert([

      'nom' => 'AGBAN',

      'prenom' =>'Fennou',

      'raison_social' =>'Fenou Grocery',

      'telephone' =>'(+229)0192323486',

      'logo' =>'logo.defaut.jpg',

      'photo_profile' =>'photo_profil/5.jpg',

      'city_id' =>8095,

      'idUser' =>7,

      'created_at' =>now(),

      'updated_at' =>now(),

    ]);

  }

}

