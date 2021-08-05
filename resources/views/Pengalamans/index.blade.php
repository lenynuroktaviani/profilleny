@extends('layouts.app')

@section('title', 'LENY NUR OKTAVIANI')

@section('content')
<a href="/pengalamans/create" class="card-link btn-primary">Tambah pengalaman</a>
@foreach ($pengalamans as $pengalaman)

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <p class="card-text"><small class="text-muted">{{ $pengalaman['kerja'] }}</small></p>
        <p class="card-text"><small class="text-muted">{{ $pengalaman['usaha'] }}</small></p>

        <a href="/pengalamans/{{ $pengalaman['id']}}/edit" class="card-link btn-primary">Edit pengalaman</a>
        <form action="/pengalamans/{{ $pengalaman['id'] }}" method="POST">
        @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete pengalaman</a>
      </div>
    </div>
  </div>
</div>
@endforeach
<div>
        {{ $pengalamans->links() }}
</div>
@endsection