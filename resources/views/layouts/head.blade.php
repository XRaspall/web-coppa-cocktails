<head>

    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Coppa Cocktails Homepage')</title>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico?version='.rand()) }}">

    <meta name="description" content="@yield('description', 'At Coppa Cocktails we help bring people together in celebration of life, love and friends with the most delicious cocktails on the planet. Enjoy our range of over 15 ready-to-drink cocktails created with world-class bartenders. Just add ice for a high-quality cocktail in an instant.')">
    <meta name="keywords" content="Coppa Cocktails, ready-to-drink cocktails, premium cocktails, natural ingredients, world-class bartenders, high-quality cocktails, instant cocktails">
    <meta name="author" content="CLiCKO Informática">

    <meta property="og:title" content="Coppa Cocktails - Premium Ready-to-Drink Cocktails">
    <meta property="og:description" content="At Coppa Cocktails we help bring people together in celebration of life, love and friends with the most delicious cocktails on the planet. Enjoy our range of over 15 ready-to-drink cocktails created with world-class bartenders. Just add ice for a high-quality cocktail in an instant.">
    <meta property="og:url" content="https://www.coppacocktails.com/">
    <meta property="og:type" content="website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- STYLES -->
    @include('layouts.styles')

</head>
