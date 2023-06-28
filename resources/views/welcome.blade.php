@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-wrap p-3">
            @foreach ($movies as $movie)
                <div class="card mx-3 my-2" style="width: 18rem;">
                    <img src="{{$movie->img}}" alt="{{$movie->title}}">
                    <div class="info">
                        <div class="card-header">
                            Titolo: {{$movie->title}}
                        </div>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item">Titolo originale: {{$movie->original_title}}</li>
                        <li class="list-group-item">Nazionalità: {{$movie->nationality}}</li>
                        <li class="list-group-item">Data di produzione: {{$movie->date}}</li>
                        <li class="list-group-item">Voto: {{$movie->vote}}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection