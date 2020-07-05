@extends('layouts.master')

@section('content')
<div class="mx-3 text-center">
  <h1 class="text-center pt-2 mb-3">Gambar ERD</h1>
  <img src="{{asset('image/erd.png')}}">
  <div>
      <a href="/artikel"><button type="button" class="btn btn-secondary">Daftar Artikel</button></a>
      <a href="artikel/create"><button type="button" class="btn btn-success ml-3">Buat Artikel Baru</button></a>
  </div>
</div>
@endsection