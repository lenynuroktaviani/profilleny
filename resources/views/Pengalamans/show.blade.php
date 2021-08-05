@extends('layouts.app')

@section('title','LENY NUR OKTAVIANI')

@section('content')
<div class="card">
<div class="cardbody">
<h3>KERJA :{{ $kontraks['kerja'] }} </h3>
<h3>USAHA :{{ $kontraks['usaha'] }} </h3>
 </div>
</div>
@endsection
