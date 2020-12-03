<!DOCTYPE html>
<html lang="fr">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!--La navbar est identique je la stock dans un fichier que j'appel en dessous-->
    @include('layout.navbar')

    <div class="container">

    <!--debut du contenu-->
        @yield('contenu')
    <!--fin du contenu-->


    </div>

</body>
</html>
