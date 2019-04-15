@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
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
      <form method="post" action="{{ route('datasiswa.update', $datasiswa->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Masukan Name:</label>
          <input type="text" class="form-control" name="datasiswa_name" value={{ $datasiswa->datasiswa_name }} />
        </div>
        <div class="form-group">
          <label for="price">Masukan Nomor :</label>
          <input type="text" class="form-control" name="datasiswa_nomor" value={{ $datasiswa->datasiswa_nomor }} />
        </div>
        <div class="form-group">
          <label for="quantity">Masukan Kelas :</label>
          <input type="text" class="form-control" name="datasiswa_kelas" value={{ $datasiswa->datasiswa_kelas }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection