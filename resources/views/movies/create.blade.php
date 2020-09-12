<h2>Inserisci nuovo film alla lista</h2>

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

<form action="{{route('movies.store')}}" method="post">
  @csrf
  @method('POST')

  <label>Title</label>
  <input type="text" name="title" placeholder="Title" value="{{ old('title') }}">

  <label>Year</label>
  <input type="number" name="year" placeholder="Year" value="{{ old('year') }}">

  <br>

  <label>Description</label>
  <input type="text" name="description" placeholder="Description" value="{{ old('description') }}">

  <label>Rating</label>
  <input type="number" name="rating" placeholder="Rating" value="{{ old('rating') }}">

  <input type="submit" value="Save">
</form>


<div>
  <b>
    <a href="{{ route('movies.index')}}"> Torna alla lista dei film </a>
  </b>
</div>
