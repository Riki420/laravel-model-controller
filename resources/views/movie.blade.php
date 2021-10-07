@extends('layouts.main')
@section('title', 'MovieDB')
@section('content')
     <div class="container-fluid bg-dark">
         <div class="row">
             <div class="col">
                <h1 class="text-center pt-2 text-white">
                    Movies
                </h1>
             </div>
         </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
               @forelse ($movies as $movie)
                <div class="col-4 m-4 align-items-stretch">
                    <div class="film-detail border">
                        <div class="title bg-dark text-white text-center p-2">
                            <h3>{{ $movie['title'] }}</h3>
                        </div>
                        <h5 class="pb-4 text-muted text-center pt-4">Titolo Originale:{{ $movie['original_title'] }}</h5>
                        <hr>
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