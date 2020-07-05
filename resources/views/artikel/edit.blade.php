@extends('layouts.master')

@section('content')
<div class="mx-3">
  <h1 class="text-center pt-2 mb-3">Edit Artikel</h1>
  <form action="/artikel/{{$artikel->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="judul">Judul:</label>
      <input type="text" class="form-control" value="{{$artikel->judul}}" placeholder="Masukkan judul artikel" name="judul" id="judul" required>
    </div>
    <div class="form-group">
      <label for="isi">Artikel:</label>
      <input type="text" class="form-control" value="{{$artikel->isi}}" placeholder="Masukkan artikel anda" name="isi" id="isi" required>
    </div>
    <div class="form-group">
      <label for="user_id">User_id:</label>
      <input type="text" class="form-control" value="{{$artikel->user_id}}" placeholder="Masukkan user_id" name="user_id" id="user_id" required>
    </div>
    <div class="form-group">
      <label for="tag">Tag:</label>
      <input type="text" class="form-control" value="{{$artikel->tag}}" placeholder="Masukkan tag" name="tag" id="penanya" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection