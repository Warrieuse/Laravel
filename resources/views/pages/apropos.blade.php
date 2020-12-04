@extends('layout.app')

@section('title')
        A propos
@endsection

@section('contenu')
        <h1>Bienvenu dans la page a propos</h1>
<!--Je boucle pour afficher les données dans ma table product ou ma var produits récupère toute les données dans le controllersPages-->
        @foreach ($produits as $produit)
            <div class="well">
            <h2><a href="/show/{{$produit->id}}">{{$produit->product_name}}</a></h2> <!--j'affiche la le champs name des produits-->
            </div>
        @endforeach
        {{$produits->links()}}<!--en dehors de ma boucle je demande à laravel
        de récupérer mon produit et de lui faire la methode links pour
        afficher les flèches de direction des produits-->

@endsection

