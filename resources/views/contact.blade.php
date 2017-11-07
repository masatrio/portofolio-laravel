@extends('master')
@section('meta')
<title>Contact me - @masatrio</title>
@stop
@section('konten')
<div class="containerku">
<form class="contactform" action="/contact" method="post">
  <input type="text" name="nama" value="" placeholder="nama">
  <input type="text" name="email" value="" placeholder="email">
  <textarea name="pesan" rows="8" cols="80" placeholder="pesan"></textarea>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="submit" name="" value="submit">
</form>
</div>
@stop
