@extends('layouts\index')
@section('main')

<h2>The update an animal page</h2>


<img src="\images\pets\{{ $animal->image->path }}"/><br />

<form action="/animals/{{ $animal->id }}" method="post">
@method('put')
@csrf
<label for="name">Name:</label>
<input name="name" value="{{old('name', $animal->name)}}"><br />
<label for="first_name">Owner first name:</label>
<input name="first_name" value="{{old('first_name', $animal->owner->first_name)}}"><br />
<label for="surname">Owner surname:</label>
<input name="surname" value="{{old('surname', $animal->owner->surname)}}"><br />
<label for="age">Age:</label>
<input name="age" value="{{old('age', $animal->age)}}"><br />
<label for="species">Species:</label>
<input name="species" value="{{old('species', $animal->species)}}"><br />
<label for="breed">Breed:</label>
<input name="breed" value="{{old('breed', $animal->breed)}}"><br />
<label for="weight">Breed:</label>
<input name="weight" value="{{old('weight', $animal->weight)}}"><br />

<button>update</button>

</form>

@endsection