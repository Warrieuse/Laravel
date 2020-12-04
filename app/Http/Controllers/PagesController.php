<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // j'importe ma DB pour pouvoir y entré mes données objets
use App\Product; // je fait appel à mon modele product
class PagesController extends Controller
{
    // affiche la pages home
    public function home() {
        return view('pages.home');
    }

    public function apropos() {
        $produits = Product::orderBy('product_name', 'asc')->paginate(1);

        //$produits = DB::table('products') // tu récupère toute les données de la table product dans la DB
                    //->orderBy('product_name', 'desc')
                    //->get();
                    //->inRandomOrder()// ca affiche de facon aléatoire nos produits
                    //->paginate(1);// je veut qu'un seul produit soit affiché à la fois
        // tu affiche la view apropos dans pages avec les données produits qui correspoondent à l'objet produits
        return view('pages.apropos')->with('produits', $produits);
    }
    public function services() {
        return view('pages.services');
    }

    public function show($id){
        // pareil en dessous mais en plus simple tu trouve id directement.
        //$produit = Product::find($id);
        /* $produit = DB::table('products')
                    ->where('id', $id)
                    ->first();*/
        //return view('pages.show')->with('produit', $produit);
        print('id'.$id);
    }
}
