@extends('layouts.master')

@section('content')
<div class="mx-3">
  <h1 class="text-center pt-2 mb-3">Detail Artikel</h1>
  <table class="table table-bordered">
    <tr>
    	<th>Judul</th>
        <td>{{ $artikel->judul }}</td>
    </tr>
    <tr>
        <th>Artikel</th>
		<td>{{ $artikel->isi }}</td>    	
    </tr>
    <tr>
        <th>Slug</th>
		<td>{{ $artikel->slug }}</td>    	
    </tr>
    <tr>
        <th>Tag</th>
        <td>{{ $artikel->tag }}</td>    	
    </tr>
    <tr>
        <th>Users ID</th>
        <td>{{ $artikel->user_id }}</td>
    </tr>
    <tr>
        <th>Created At</th>
        <td>{{ $artikel->created_at }}</td>
    </tr>
    <tr>
        <th>Updated At</th>
        <td>{{ $artikel->updated_at }}</td>
    </tr>
  </table>
  <a href="/artikel/{{$artikel->id}}/edit" class="btn btn-primary mb-5">Edit Artikel</a>

  <div class="d-flex mx-2">
    <div class="p-2"><a href="/artikel" class="btn btn-danger" role="button">Kembali</a></div>
  </div>
</div>
@endsection