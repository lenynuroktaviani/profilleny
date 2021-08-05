@extends('layouts.app')

@section('title', 'LENY NUR OKTAVIANI')

@section('content')
<div class="card">
    <div class="card-body">
            <h3>NO TELEPON : {{ $kontak['no_tlp'] }}</h3>
            <h3>EMAIL : {{ $kontak['email'] }}</h3>
            <h3>INSTAGRAM : {{ $kontak['instagram'] }}</h3>
            <h3>FACEBOOK : {{ $kontak['facebook'] }}</h3>
    </div>
</div>
@endsection 
