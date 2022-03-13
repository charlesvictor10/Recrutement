<?php

namespace Database\Seeders;

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $Category = new Category();
//        $Category->nom = "UFR-SES";
//        $Category->is_online = 1;
//        $Category->save();
//
//        $Category2 = new Category();
//        $Category2->nom = "UFR-LASHU";
//        $Category2->is_online = 1;
//        $Category2->save();
//
//        $Category3 = new Category();
//        $Category3->nom = "UFR-SANTE";
//        $Category3->is_online = 1;
//        $Category3->save();
//
//        $Category4 = new Category();
//        $Category4->nom = "UFR-ST";
//        $Category4->is_online = 1;
//        $Category4->save();

        $Category4 = new Category();
        $Category4->nom = "les emploies";
        $Category4->is_online = 1;
        $Category4->parent_id = 1;
        $Category4->save();

        $Category5 = new Category();
        $Category5->nom = "poste-UASZ";
        $Category5->is_online = 1;
        $Category5->parent_id = 1;
        $Category5->save();

        $Category6 = new Category();
        $Category6->nom = "poste";
        $Category6->is_online = 1;
        $Category6->parent_id = 2;
        $Category6->save();

        $Category7 = new Category();
        $Category7->nom = "RP";
        $Category7->is_online = 1;
        $Category7->parent_id = 2;
        $Category7->save();
    }
}
