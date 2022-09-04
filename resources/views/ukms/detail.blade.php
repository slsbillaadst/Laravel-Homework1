@extends('layouts.main')

@section('content')
    <h3 class="text-center">Detail Registrasi</h3>

    <div class="mt-50%">
        <p>Name : {{ $request->name }}</p>
        <p>NPM : {{ $request->npm }}</p>
        <p>Date of Birth: {{ $request->ttl }}</p>
        <p>Cellphone : {{ $request->handphone }}</p>
        <p>Email : {{ $request->email }}</p>
        <p>Study Program : {{ $request->prodi }}</p>
    </div>
@endsection
