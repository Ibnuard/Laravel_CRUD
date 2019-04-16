@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambahkan Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('perpus.store') }}">
          <div class="form-group">
              @csrf
              <label for="judul">Judul :</label>
              <input type="text" class="form-control" name="p_judul"/>
          </div>
          <div class="form-group">
              <label for="penerbit">Penerbit :</label>
              <input type="text" class="form-control" name="p_penerbit"/>
          </div>
          <div class="form-group">
              <label for="tahun">Tahun Terbit :</label>
              <input type="text" class="form-control" name="p_tahun"/>
          </div>
          <div class="form-group">
              <label for="pengarang">Pengarang :</label>
              <input type="text" class="form-control" name="p_pengarang"/>
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
  </div>
</div>
@endsection