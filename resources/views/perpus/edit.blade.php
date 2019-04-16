@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Data
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
      <form method="post" action="{{ route('perpus.update', $perpus->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="judul">Judul Buku: </label>
          <input type="text" class="form-control" name="p_judul" value={{ $perpus->p_judul }} />
        </div>
        <div class="form-group">
          <label for="penerbit">Penerbit :</label>
          <input type="text" class="form-control" name="p_penerbit" value={{ $perpus->p_penerbit }} />
        </div>
        <div class="form-group">
          <label for="tahun">Tahun Terbit:</label>
          <input type="text" class="form-control" name="p_tahun" value={{ $perpus->p_tahun }} />
        </div>
        <div class="form-group">
          <label for="pengarang">Pengarang :</label>
          <input type="text" class="form-control" name="p_pengarang" value={{ $perpus->p_pengarang }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection