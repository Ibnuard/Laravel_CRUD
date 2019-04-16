@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Judul Buku</td>
          <td>Penerbit</td>
          <td>Tahun Terbit</td>
          <td>Pengarang</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($perpus as $perpus)
        <tr>
            <td>{{$perpus->id}}</td>
            <td>{{$perpus->p_judul}}</td>
            <td>{{$perpus->p_penerbit}}</td>
            <td>{{$perpus->p_tahun}}</td>
            <td>{{$perpus->p_pengarang}}</td>
            <td><a href="{{ route('perpus.edit',$perpus->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('perpus.destroy', $perpus->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection