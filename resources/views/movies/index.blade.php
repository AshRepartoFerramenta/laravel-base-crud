<h1>Lista film</h1>

<div>
  <h3><a href="{{route('movies.create')}}">Aggiungi film</a></h3>
</div>

<ul>
  @foreach ($movies as $movie)

  <li>
    <h2>{{ $movie->title }} </h2>
    <button type="button" name="button">
      <a href="{{ route('movies.show', $movie->id) }}"> Dettagli Film </a>
    </button>

    <button type="button" name="button">
      <a href="{{ route('movies.edit', $movie->id) }}"> Modifica Film </a>
    </button>

    <form action="{{route('movies.destroy', $movie->id)}}" method="post">
      @csrf
      @method('DELETE')
      <input type="submit" name="Elimina" value="Elimina">
    </form>

  </li>
  @endforeach
</ul>
