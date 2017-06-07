@extends('layouts.main-layout')

@section('content')
  @include('includes.cms-header')

  Make a new bird!

  <h2>Form goes here</h2>

  @include('includes.bird-form')

  <example></example>
@endsection
