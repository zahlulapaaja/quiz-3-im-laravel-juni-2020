@extends('layouts.master')

@section('content')
<div class="mx-3">
  <h1 class="text-center pt-2 mb-3">Daftar Pertanyaan</h1>
  <table class="table table-bordered">
    <thead>
      <tr class="text-center">
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Tag</th>
        <th>Penulis</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($artikel as $key => $data)
      <tr class="text-center">
        <td>{{ $key + 1 }}</td>
        <td>{{ $data->judul }}</td>
        <td class="text-left">{{ $data->isi }}</td>
        <td>{{ $data->tag }}</td>
        <td>{{ $data->user_id }}</td>
        <td>
          <a href="artikel/{{$data->id}}" class="btn btn-info">Detail</a>
          <form action="/artikel/{{$data->id}}" method="post" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @if (count($artikel) === 0)
    <p class="text-center">Belum ada artikel!</p>
  @endif

  <div>
    <a href="artikel/create"><button type="button" class="btn btn-success ml-3">Buat Artikel</button></a>
  </div>
</div>
@endsection

@push('scripts')

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

@endpush