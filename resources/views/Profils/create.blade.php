@extends('layouts.app')

@section('title', 'LENY NUR OKTAVIANI')

@section('content')

<form action="/profils" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputPassword1">NAMA</label>
    <input type="text" class="form-control" name="nama" id="exampleInputPassword1"  value="{{ old('nama') }}">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">TEMPAT, TANGGAL, LAHIR</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="ttl" aria-describedby="emailHelp" value="{{ old('ttl') }}">
    @error('ttl')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">ALAMAT</label>
    <input type="text" class="form-control" name="alamat" id="emailHelp" value="{{ old('alamat') }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">JENIS KELAMIN</label>
    <input type="text" class="form-control" name="jk" id="emailHelp" value="{{ old('jk') }}">
    @error('jk')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
