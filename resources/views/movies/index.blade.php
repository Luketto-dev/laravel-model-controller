@extends('layouts.app')


@section('main_content')
<div class="container">
    <h1>Lista film</h1>
    <div class="movies-list pt-5">
        <div class="row row-cols-5 gy-3">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="movie-card">
                    <div class="overlay"></div>
                    <div class="card-content">
                        <h3>{{$movie['title']}}</h3>
                        <h6>Titolo originale: {{$movie['original_title']}}</h6>
                        <h6>Nazionalità: {{$movie['nazionality']}}</h6>
                        <h6>Data Produzione: {{date('F, Y', strtotime($movie['date']))}}</h6>
                        <h6>voto: {{$movie['vote']}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
