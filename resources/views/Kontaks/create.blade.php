@extends('layouts.app')

@section('title', 'LENY NUR OKTAVIANI')

@section('content')

<form action="/kontaks" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputPassword1">NO TELEPON</label>
    <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1"  value="{{ old('no_tlp') }}">
    @error('no_tlp')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">EMAIL</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{ old('email') }}">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">INSTAGRAM</label>
    <input type="text" class="form-control" name="instagram" id="emailHelp" value="{{ old('instagram') }}">
    @error('instagram')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">FACEBOOK</label>
    <input type="text" class="form-control" name="facebook" id="emailHelp" value="{{ old('facebook') }}">
    @error('facebook')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
