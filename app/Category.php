<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //Récuperer le catégorie parent d'une categorie
    public function parent(){
       return $this->belongsTo('App\Category','parent_id');

    }
    public function children(){
        return $this->hasMany('App\Category','parent_id');
    }
    //récuperer les produits de la catégorie >> OneToMany
    public function productsParent(){
        return $this->hasMany('App\product');
    }
    //récuperer les produits sutié dans une catégorie enfant au travers d'un catégorie parent
    public function productsChild(){

        return $this->hasManyThrough('App\product', 'App\Category','parent_id','category_id');
    }
    public function products(){
        $products=$this->productsParent()->with('category')->get()->merge($this->productsChild()->with('category')->get());
        return $products;
    }

}

