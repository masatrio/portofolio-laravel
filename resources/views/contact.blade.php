@extends('master')
@section('meta')
<title>Contact me - @masatrio</title>
@stop
@section('konten')
<div class="containerku">
  <div class="kolom-2">
    <form action="/contact" method="post">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="pesan">Pesan</label>
        <textarea type="textarea" class="form-control" name="pesan" id="pesan" placeholder="Pesan" rows="8" cols="150"></textarea>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="submit" style="float:right" class="btn btn-primary" value="Submit">
    </form>
  </div>
  <div class="kolom-2">
      <div class="jumbotronku">
        <span class="skill">Facebook</span>
        <center><p><a href="https://facebook.com/MaulanaAjiSatrio">https://facebook.com/MaulanaAjiSatrio</a></p></center><br>

        <span class="skill">Github</span>
        <center><p><a href="https://github.com/masatrio">https://github.com/masatrio</a></p></center><br>

        <span class="skill">Email</span>
        <center><p><a href="mailto:ajisatriomaulana@gmail.com">ajisatriomaulana@gmail.com</a></p></center><br>

        <span class="skill">Phone And Whatsapp</span>
        <center><p>0 8 1 5 5 9 0 9 6 4 5</p></center><br>
      </div><br>
  </div>
  <div class="clear"></div>
</div>
@stop
