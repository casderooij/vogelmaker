@extends('layouts.cms-layout')

@section('content')
  Make a new bird!

  @foreach($birds as $bird)
    <p>{{ $bird->eng_name }}</p>

  @endforeach

  <h2>Form goes here</h2>
@stop
