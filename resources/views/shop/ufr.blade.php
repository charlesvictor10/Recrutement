@extends('index')
@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <section class="inner-banner" style="backend:#242c36 url(https://via.placeholder.com/1920x600)no-repeat;">
        <div class="container">
            <div class="caption">
                <h2>Les offres par UFR</h2>
                <p>Postuler aux offres d'emploi de l'<span>{{$category->nom}}</span></p>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            @foreach($products as $prod)
                <div class="col-md-4 col-sm-4">
                    <div class="features-content">
                        <span class="box1" style="align-content: center;"><img src="{{asset('img/ico.png')}}" class="img-responsive" alt="{{$prod->titre}}"/></span>
                        <h3>{{$prod->titre}}</h3>
                        <p>{{$prod->description}}</p>
                        <a href="offre/{{$prod->id}}"><input type="button" class="btn brows-btn" value="Details"/></a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
