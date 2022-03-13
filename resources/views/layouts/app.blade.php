<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Recrutement UASZ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All Plugin Css -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">

    <!-- Style & Common Css -->
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
<!-- Navigation Start  -->
<nav class="navbar navbar-default navbar-sticky bootsnav">

    <div class="container">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('accueil')}}"><img src="{{asset('img/logo.png')}}" class="logo" alt=""></a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li><a href="{{route('accueil')}}">Accueil</a></li>
                <li><a href="{{route('listeOffres')}}">Offres</a></li>
                <li><a href="{{route('register')}}">Inscription</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<!-- Navigation End  -->
@yield('content')
<!-- footer start -->
<footer>
    <div class="copy-right">
        <p>&copy;Copyright 2022 Mame Fatou Diene</p>
    </div>
</footer>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/bootsnav.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
