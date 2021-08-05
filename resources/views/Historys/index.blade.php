@extends('layouts.app')

@section('title', 'LENY NUR OKTAVIANI')

@section('content')
<a href="/historys/create" class="card-link btn-primary">Tambah History</a>
@foreach ($historys as $history)

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <a href="/historys/{{ $history['id']}}"class="card-title">{{ $history['sd'] }}</a>
        <p class="card-text"><small class="text-muted">{{ $history['smp'] }}</small></p>
        <p class="card-text"><small class="text-muted">{{ $history['sma'] }}</small></p>
        <p class="card-text"><small class="text-muted">{{ $history['perguruan_tinggi'] }}</small></p>

        <a href="/historys/{{ $history['id']}}/edit" class="card-link btn-primary">Edit history</a>
        <form action="/historys/{{ $history['id'] }}" method="POST">
        @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete history</a>
      </div>
    </div>
  </div>
</div>
@endforeach
<div>
        {{ $historys->links() }}
</div>
@endsection