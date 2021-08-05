@extends('layouts.app')

@section('title', 'LENY NUR OKTAVIANI')

@section('content')
<a href="/kontaks/create" class="card-link btn-primary">Tambah kontak</a>
@foreach ($kontaks as $kontak)

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <p class="card-text"><small class="text-muted">{{ $kontak['no_tlp'] }}</small></p>
        <p class="card-text"><small class="text-muted">{{ $kontak['email'] }}</small></p>
        <p class="card-text"><small class="text-muted">{{ $kontak['instagram'] }}</small></p>
        <p class="card-text"><small class="text-muted">{{ $kontak['facebook'] }}</small></p>

        <a href="/kontaks/{{ $kontak['id']}}/edit" class="card-link btn-primary">Edit kontak</a>
        <form action="/kontaks/{{ $kontak['id'] }}" method="POST">
        @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete kontak</a>
      </div>
    </div>
  </div>
</div>
@endforeach
<div>
        {{ $kontaks->links() }}
</div>
@endsection