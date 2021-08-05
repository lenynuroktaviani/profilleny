@extends('layouts.app')

@section('title', 'LENY NUR OKTAVIANI')

@section('content')

<form action="/pengalamans" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">KERJA</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="kerja" aria-describedby="emailHelp" value="{{ old('kerja') }}">
    @error('kerja')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">USAHA</label>
    <input type="text" class="form-control" name="usaha" id="emailHelp" value="{{ old('usaha') }}">
    @error('usaha')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
