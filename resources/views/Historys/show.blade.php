@extends('layouts.app')

@section('title', 'LENY NUR OKTAVIANI')

@section('content')
<div class="card">
    <div class="card-body">
            <h3>SEKOLAH DASAR : {{ $history['sd'] }}</h3>
            <h3>SEKOLAH MENENGAH PERTAMA : {{ $history['smp'] }}</h3>
            <h3>SEKOLAH MENENGAH AKHIR : {{ $history['sma'] }}</h3>
            <h3>PERGURUAN TINGGI : {{ $history['perguruan_tinggi'] }}</h3>
    </div>
</div>
@endsection 
