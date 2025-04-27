<?php



namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;



class ImageSeeder extends Seeder

{

  /**

  * Run the database seeds.

  */

  public function run(): void

  {

    DB::table('images')->insert([

      'image_src' => 'produits/01.png',

      'id_produit' =>1,

    ]);DB::table('images')->insert([

      'image_src' => 'produits/01-hover.png',

      'id_produit' =>1,

    ]);



    DB::table('images')->insert([

      'image_src' => 'produits/02.png',

      'id_produit' =>2,

    ]);DB::table('images')->insert([

      'image_src' => 'produits/02-hover.jpg',

      'id_produit' =>2,

    ]);



    DB::table('images')->insert([

      'image_src' => 'produits/03.png',

      'id_produit' =>3,

    ]); DB::table('images')->insert([

      'image_src' => 'produits/03-hover.jpg',

      'id_produit' =>3,

    ]);



    DB::table('images')->insert([

      'image_src' => 'produits/09.png',

      'id_produit' =>4,

    ]); DB::table('images')->insert([

      'image_src' => 'produits/09-hover.jpg',

      'id_produit' =>4,

    ]);



    DB::table('images')->insert([

      'image_src' => 'produits/12.png',

      'id_produit' =>5,

    ]); DB::table('images')->insert([

      'image_src' => 'produits/12-hover.jpg',

      'id_produit' =>5,

    ]);



    DB::table('images')->insert([

      'image_src' => 'produits/banner01.png',

      'id_produit' =>6,

    ]); DB::table('images')->insert([

      'image_src' => 'produits/banner02.png',

      'id_produit' =>6,

    ]); DB::table('images')->insert([

      'image_src' => 'produits/banner03.png',

      'id_produit' =>6,

    ]);



    DB::table('images')->insert([

      'image_src' => 'produits/color01.png',

      'id_produit' =>7,

    ]); DB::table('images')->insert([

      'image_src' => 'produits/color02.png',

      'id_produit' =>7,

    ]); DB::table('images')->insert([

      'image_src' => 'produits/color03.png',

      'id_produit' =>7,

    ]);



    DB::table('images')->insert([

      'image_src' => 'produits/th01.png',

      'id_produit' =>8,

    ]); DB::table('images')->insert([

      'image_src' => 'produits/th04.png',

      'id_produit' =>8,

    ]); DB::table('images')->insert([

      'image_src' => 'produits/th06.png',

      'id_produit' =>8,

    ]);



    DB::table('images')->insert([

      'image_src' => 'produits/l1.png',

      'id_produit' =>9,

    ]); DB::table('images')->insert([

      'image_src' => 'produits/l2.png',

      'id_produit' =>9,

    ]);



    DB::table('images')->insert([

      'image_src' => 'produits/sac1.png',

      'id_produit' =>10,

    ]);



    DB::table('images')->insert([

      'image_src' => 'produits/sac2.png',

      'id_produit' =>11,

    ]);

  }

}
