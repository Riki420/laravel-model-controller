@extends('layouts.main')
@section('title', 'MovieDB')
@section('content')
     <div class="container">
            <h1 class="text-center">
                Movies
            </h1>
            <hr>
            
            <div class="row justify-content-center">
               @forelse ($movies as $movie)
                <div class="col-4 m-4" style="width: 18rem;">
                    <div class="film-detail">
                        <h3>{{ $movie['title'] }}   </h3>
                        <h5 class="mb-4 text-muted">Titolo Originale:{{ $movie['original_title'] }}</h5>
                        <ul>
                            <li>Paese di Produzione: {{ $movie['nationality'] }}</li>
                            <li>Data di uscita: {{ $movie['date'] }}</li>
                            <li>Valutazione: {{ $movie['vote'] }}</li> 
                        </ul>  
                    </div>
                </div>
    
            @empty
            <h1>Nessun Film trovato!!</h1>
            @endforelse 
            </div>
            
     </div>
@endsection