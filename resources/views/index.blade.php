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
          <td>Nama Siswa</td>
          <td>Nomor Absen</td>
          <td>Kelas Kelas</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($datasiswa as $datasiswa)
        <tr>
            <td>{{$datasiswa->id}}</td>
            <td>{{$datasiswa->datasiswa_name}}</td>
            <td>{{$datasiswa->datasiswa_nomor}}</td>
            <td>{{$datasiswa->datasiswa_kelas}}</td>
            <td><a href="{{ route('datasiswa.edit',$datasiswa->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('datasiswa.destroy', $datasiswa->id)}}" method="post">
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