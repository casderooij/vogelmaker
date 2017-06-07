@extends('layouts.cms-layout')

@section('content')
  Make a new bird!

  @foreach($birds as $bird)
    <p>{{ $bird->eng_name }}</p>

  @endforeach

  <h2>Form goes here</h2>


  <!-- form -->
  <form class="cms-form" action="home" method="post" enctype="multipart/form-data">
    <!-- CSRF token (using vue: make meta tag in <head>) -->
    <input type="hidden" name="_token" value="{{ Session::token() }}">

    <!-- First english name of bird -->
    <label for="eng_name">English name of bird:</label><br>
    <input type="text" name="eng_name"><br><br>

    <!-- Image uploads -->
    <label for="head_img">Image of the head</label><br>
    <input type="file" name="head_img"><br><br>
    <label for="body_img">Image of the body</label><br>
    <input type="file" name="body_img"><br><br>
    <label for="legs_img">Image of the legs</label><br>
    <input type="file" name="legs_img"><br><br>
    <label for="wing_img">Image of the wing</label><br>
    <input type="file" name="wing_img"><br><br>

    <!-- meta data -->
    <label for="lat_name">Latin name:</label><br>
    <input type="text" name="lat_name"><br><br>

    <label for="location">Location where the bird lives:</label><br>
    <input type="text" name="location"><br><br>

    <label for="diet">Diet of the bird:</label><br>
    <textarea name="diet" rows="2" cols="40"></textarea><br><br>

    <input type="submit" name="submit">
  </form>
@stop
