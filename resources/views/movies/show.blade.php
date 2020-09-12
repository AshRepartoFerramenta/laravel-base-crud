<h2>Dettagli Film</h2>
<h3>Titolo: {{$movie->title}}</h3>
<p>Anno: {{ $movie->year }}</p>
<p>Voto: {{ $movie->rating }}</p>
<p>Descrizione: {{$movie->description}}</p>
<a href="{{ route('movies.index')}}"> Torna alla lista dei film </a>
