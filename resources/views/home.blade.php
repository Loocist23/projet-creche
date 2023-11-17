@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil de la Crèche</title>
    <!-- Ajoutez ici des liens vers des feuilles de style CSS -->
</head>
<body>
<header>
    <h1>Bienvenue à Notre Crèche</h1>
    <!-- Menu de navigation, logo, etc. -->
</header>

<main>
    <!-- Contenu principal de la page -->
    <p>Ceci est la page d'accueil de notre crèche.</p>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3" class="active"></li>

            <!-- Ajoute plus de <li> ici pour chaque image -->
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src=" {{ asset('img/creche1.png') }}"  alt="Image 1">
            </div>
            <div class="carousel-item active">
                <img src=" {{ asset('img/creche2.png') }}" alt="Image 1">
            </div>
            <div class="carousel-item active">
                <img src=" {{ asset('img/creche2.png') }}" alt="Image 1">
            </div>
            <div class="carousel-item active">
                <img src=" {{ asset('img/creche2.png') }}" alt="Image 1">
            </div>

            <!-- Ajoute plus de <div class="carousel-item"> pour chaque image supplémentaire -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>

</main>

<footer>
    <!-- Pied de page avec des informations de contact, etc. -->
    <p>Contactez-nous au ...</p>
</footer>

<!-- Ajoutez ici des scripts JavaScript si nécessaire -->
</body>
</html>

@endsection
