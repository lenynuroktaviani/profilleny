@extends('layouts.app')

@section('title', 'LENY NUR OKTAVIANI')

@section('content')
<a href="/profils/create" class="card-link btn-primary">Tambah profil</a>
@foreach ($profils as $profil)

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <p class="card-text"><small class="text-muted">{{ $profil['nama'] }}</small></p>
        <p class="card-text"><small class="text-muted">{{ $profil['ttl'] }}</small></p>
        <p class="card-text"><small class="text-muted">{{ $profil['alamat'] }}</small></p>
        <p class="card-text"><small class="text-muted">{{ $profil['jk'] }}</small></p>

        <a href="/profils/{{ $profil['id']}}/edit" class="card-link btn-primary">Edit profil</a>
        <form action="/profils/{{ $profil['id'] }}" method="POST">
        @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete profil</a>
      </div>
    </div>
  </div>
</div>
@endforeach
<div>
        {{ $profils->links() }}
</div>
@endsection