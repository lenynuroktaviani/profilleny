@extends('layouts.app')

@section('title', 'LENY NUR OKTAVIANI')

@section('content')
<div class="card">
    <div class="card-body">
            <h3>NAMA : {{ $profil['no_tlp'] }}</h3>
            <h3>TEMPAT, TANGGAL, LAHIR : {{ $profil['ttl'] }}</h3>
            <h3>ALAMAT : {{ $profil['alamat'] }}</h3>
            <h3>JENIS KELAMIN : {{ $profil['jk'] }}</h3>
    </div>
</div>
@endsection 
