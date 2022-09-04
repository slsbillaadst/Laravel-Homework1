@extends('layouts.main')

@section('content')
    <h2 class="text-center mb-5">About Of ABC UKM</h2>
    <div class="text-center">
        <h4>Nama : {{ $name }}</h4>
        <h4>Tahun Bediri : {{ $tahun }}</h4>
        <h4>Pendiri : {{ $pendiri }} </h4>
    </div>
@endsection
