<?php

namespace Database\Seeders;

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->extracted();

        $this->extracted();
    }

    /**
     * @return void
     */
    public function extracted(): void
    {
        $product = $this->getProduct();
        $product->category_id = 3;

        $product = new Product();
        $product->titre = "poste superviseur";
        $product->description = "méthode du plan de création de schéma. Si votre application utilise une base de données SQLite, vous ";
        $product->photo = "ico.png";
        $product->category_id = 4;
        $product->save();

        $product = $this->getProduct();
        $product->category_id = 2;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        $product = new Product();
        $product->titre = "poste super";
        $product->description = "la minerer dir suri s f fhfd  n n;f ";
        $product->photo = "ico.png";
        $product->category_id = 3;
        $product->save();

        $product = new Product();
        $product->titre = "poste superviseur";
        $product->description = "La suppression ou la modification de plusieurs colonnes au sein d'une même migration lors de l'utilisation d'une base de données SQLite n'est pas prise en charge. ";
        $product->photo = "ico.png";
        $product->category_id = 1;
        $product->save();
        return $product;
    }
}
