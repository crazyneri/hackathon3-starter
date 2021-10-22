@extends('layouts\index')
@section('main')

<h2>The animals page</h2>
<form action="/animals" method="post">
<input type="text" name="search"/>
<input type="submit"/>

</form>
<ul>
@foreach($animals as $animal)
  <a href="/animals/{{ $animal->id }}"><li>{{ $animal->name }}<img src="images\pets\{{ $animal->image->path }}"></img></li></a>
@endforeach
</ul>
@endsection