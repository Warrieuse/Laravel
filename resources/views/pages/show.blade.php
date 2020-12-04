@extends('layout.app')

@section('title')
        A propos
@endsection

@section('contenu')
        <h1>Le détail du produit</h1>
        <hr>
        <h2>{{$produit->product_name}}</h2>
        <h3>{{$produit->product_price}}</h3>
        <p>{{$produit->description}}</p>
        <hr>
        <h4>{{$produit->created_at}}</h4>
@endsection
