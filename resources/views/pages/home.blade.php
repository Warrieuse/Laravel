<!--on fait hérité le contenu HTML de layout-->
@extends('layout.app')

@section('title')
    home
@endsection
<!--dans layout.app nous avon un yield sur lequel nous allons incorporer ce contenu html-->
@section('contenu')
    <div class="jumbotron">
        <h1>Bienvenu dans le projet laravel 7.X</h1>
    </div>
@endsection

