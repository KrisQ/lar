@extends('layouts.app')

@section('content')

<form method="post" action="/public/posts">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="text" name="title">
  <input class="waves-effect waves-light btn" type="submit" name="submit">
</form>

@stop

@yield('footer')
