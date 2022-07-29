@extends('layouts.app')


@section('main_content')
<div class="container">
    <h1 class="text-center text-white">Movies</h1>
    <div class="movies-list py-5">
        <div class="row row-cols-5 gy-3">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card h-100 text-center bg-light">
                    <img src="{{asset("images/cover-film.jpg")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$movie['title']}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <span class="fw-bold">Titolo originale: </span>
                        <span>{{$movie['original_title']}}</span>
                      </li>
                      <li class="list-group-item">
                        <span class="fw-bold">nazionalità: </span>
                        <span>{{$movie['nationality']}}</span>
                      </li>
                      <li class="list-group-item">
                        <span class="fw-bold">data di produzione: </span>
                        <span>{{ date('F, Y', strtotime($movie->date)) }}</span>
                      </li>
                      <li class="list-group-item">
                        <span class="fw-bold">voto: </span>
                        <span>{{$movie['vote']}}</span>
                      </li>
                    </ul>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
