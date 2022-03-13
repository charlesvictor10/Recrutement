<?php

namespace App\Http\Controllers\Shop;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Tag;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function indexation(){
        $product = Product::with('category')->orderBy('created_at', 'desc')->take(6)->get();
        return view('shop.indexation',compact('product'));
    }

    public function listeOffres() {
        $products = Product::with('category')->orderByDesc('created_at')->get();
        return view('shop.offres',compact('products'));
    }

    public function detailOffre(Request $request) {
        $product = Product::Find($request->id);
        return view('shop.detail',compact('product'));
    }

    public function offresParUfr(Request $request){
        $category = Category::find($request->id);
        $products = $category->products();
        return view('shop.ufr',compact('products','category'));
    }

    public function viewByTag(Request $request){
        $tag=Tag::find($request->id);
        $products = $tag->products;
        return view('shop.categorie',compact('products','tag'));
    }
}
