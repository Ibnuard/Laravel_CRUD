@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
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
      <form method="post" action="{{ route('datasiswa.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Masukan Nama:</label>
              <input type="text" class="form-control" name="datasiswa_name"/>
          </div>
          <div class="form-group">
              <label for="price">Nomor :</label>
              <input type="text" class="form-control" name="datasiswa_nomor"/>
          </div>
          <div class="form-group">
              <label for="quantity">Kelas:</label>
              <input type="text" class="form-control" name="datasiswa_kelas"/>
          </div>
          <button type="submit" class="btn btn-primary">Tambahkan</button>
      </form>
  </div>
</div>
@endsection