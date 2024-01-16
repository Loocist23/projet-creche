@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil de la Crèche</title>
    <!-- Ajoutez ici des liens vers des feuilles de style CSS -->
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        .image-gallery {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .image-gallery img {
            width: 30%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<header>
    <h1>Bienvenue à Notre Crèche</h1>

    <!-- Menu de navigation, logo, etc. -->
</header>

<main>
    <!-- Contenu principal de la page -->
    <p>Ceci est la page d'accueil de notre crèche.</p>
    <div class="image-gallery">
        <img src="{{ asset('img/test.png') }}" alt="Intérieur de la crèche">
        <img src="{{ asset('img/test1.png') }}" alt="Aire de jeux extérieure">
        <img src="{{ asset('img/test2.png') }}" alt="Coin lecture">
    </div>

</main>

<footer>
    <!-- Pied de page avec des informations de contact, etc. -->
    <p>Contactez-nous <a href="mailto:anthonyzegnal05@gmail.com">ici</a></p>
</footer>

<!-- Ajoutez ici des scripts JavaScript si nécessaire -->
</body>
</html>

@endsection
