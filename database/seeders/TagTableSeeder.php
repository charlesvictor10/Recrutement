<?php

namespace Database\Seeders;

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag=new Tag();
        $tag->nom = "#Humour";
        $tag->save();

        $tag2=new Tag();
        $tag2->nom = "#Fun";
        $tag2->save();

        $tag3=new Tag();
        $tag3->nom = "#Rouge";
        $tag3->save();
    }
}
