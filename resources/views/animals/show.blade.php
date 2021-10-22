@extends('layouts\index')
@section('main')

<h2>The animals page</h2>
<h3>{{ $animal->name }}</h3>

<img src="\images\pets\{{ $animal->image->path }}"></img>
<p>Owner: {{ $animal->owner }}</p>
<p>Age: {{ $animal->age }}</p>
<p>Species: {{ $animal->species }}</p>
<p>Breed: {{ $animal->breed }}</p>
<p>Weight: {{ $animal->weight }}</p>

@endsection