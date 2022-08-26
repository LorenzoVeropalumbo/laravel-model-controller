@extends('layouts.app')

@section('main_content')
  <section class="main-film-section">
    <div class="film-type-section">
      <h2>Film</h2>
      <div class="card-container">
        @foreach ($movies as $movie)
          <div class="card">
            <h3>Title - {{ $movie->title }}</h3>
            <h3>Original Title - {{ $movie->original_title }}</h3>
            <span>Nationality - {{ $movie->nationality }}</span>
            <span>Date - {{ $movie->date }}</span>
            <span>Vote - {{ $movie->vote }}</span>
          </div>
        @endforeach        
      </div> 
    </div>
    <div class="film-type-section">
      <h2>Film da rivedere</h2>
      <div class="card-container">
        @foreach ($movies as $movie)
          <div class="card">
            <h3>Title - {{ $movie->title }}</h3>
            <h3>Original Title - {{ $movie->original_title }}</h3>
            <span>Nationality - {{ $movie->nationality }}</span>
            <span>Date - {{ $movie->date }}</span>
            <span>Vote - {{ $movie->vote }}</span>
          </div>
        @endforeach        
      </div> 
    </div>
  </section> 
@endsection