@extends('layouts.app')

@section('title', 'LENY NUR OKTAVIANI')

@section('content')

<form action="/historys" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">SEKOLAH DASAR</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="sd" aria-describedby="emailHelp" value="{{ old('sd') }}">
    @error('sd')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">SEKOLAH MENENGAH PERTAMA</label>
    <input type="text" class="form-control" name="smp" id="emailHelp" value="{{ old('smp') }}">
    @error('smp')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">SEKOLAH MENENGAH AKHIR</label>
    <input type="text" class="form-control" name="sma" id="emailHelp" value="{{ old('sma') }}">
    @error('sma')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PERGURUAN TINGGI</label>
    <input type="text" class="form-control" name="perguruan_tinggi" id="emailHelp" value="{{ old('perguruan_tinggi') }}">
    @error('perguruan_tinggi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
