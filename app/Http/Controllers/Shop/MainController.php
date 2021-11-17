<?php

namespace App\Http\Controllers\Shop;

use App\Models\Category;
use App\Models\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        //dd($produits);
        $categories = Category::where('is_online', 1)->get();
        return view('shop.index', compact('produits', 'categories'));
    }

    public function produit(Request $request)
    {
        //dd($request->id);
        $produit = Produit::find($request->id);
        $categories = Category::where('is_online', 1)->get();
        return view('shop.produit', compact('produit','categories'));
    }

    public function viewByCategory(Request $request)
    {
        $categories = Category::where('is_online', 1)->get();
        //dd($categories);
        $produits = Produit::where('category_id',$request->id)->get();

        return view('shop.category', compact('categories', 'produits'));
    }
}
