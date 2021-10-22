@extends('layouts\index')
@section('main')

<h2>The owners page</h2>

@foreach($owners as $owner)
  <a href="/owners/{{ $owner->id }}"><h4>{{ $owner->first_name }} {{ $owner->surname }}</h4></a>
  @foreach($owner->animals as $pet)
  <p>Pet: <a href="/animals/{{ $pet->id }}">{{$pet->name}}</a></p>
  @endforeach
    <p>Email: <a href="mailto: {{ $owner->surname }}&commat;email.com">{{ $owner->surname }}&commat;email.com</a></p>
@endforeach
@endsection