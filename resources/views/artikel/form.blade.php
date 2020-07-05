@extends('layouts.master')

@section('content')
<div class="mx-3">
  <h1 class="text-center pt-2 mb-3">Buat Arikel Baru</h1>
  <form action="/artikel" method="post">
    @csrf
    <div class="form-group">
      <label for="judul">Judul:</label>
      <input type="text" class="form-control" placeholder="Masukkan judul artikel" name="judul" id="judul" required>
    </div>
    <div class="form-group">
      <label for="isi">Artikel:</label>
      <input type="text" class="form-control" placeholder="Masukkan artikel anda" name="isi" id="isi" required>
    </div>
    <div class="form-group">
      <label for="user_id">User_id:</label>
      <input type="text" class="form-control" placeholder="Masukkan user_id" name="user_id" id="user_id" required>
    </div>
    <div class="form-group">
      <label for="tag">Tag:</label>
      <input type="text" class="form-control" placeholder="Masukkan penulis" name="tag" id="tag" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection