<h2>Modifica film</h2>

<div>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
	@endif
</div>

<form action="{{route('movies.update', $movie->id)}}" method="post">
  @csrf
  @method('PUT')

  <label>Title</label>
  <input type="text" name="title" placeholder="Title" value="{{ $movie->title }}">

  <label>Year</label>
  <input type="number" name="year" placeholder="Year" value="{{ $movie->year }}">

  <br>

  <label>Description</label>
  <input type="text" name="description" placeholder="Description" value="{{ $movie->description }}">

  <label>Rating</label>
  <input type="number" name="rating" placeholder="Rating" value="{{ $movie->rating }}">

  <input type="submit" value="Save">
</form>


<div>
  <b>
    <a href="{{ route('movies.index')}}"> Torna alla lista dei film </a>
  </b>
</div>
