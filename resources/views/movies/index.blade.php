@extends('layouts.app')


@section('main_content')
<div class="container">
    <div class="movies-list">
        <div class="row row-cols-5">
            @foreach ($movies as $movie)
            <div class="col">
                
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
