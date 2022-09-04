@extends('layouts.main')

@section('content')
    <h3 class="text-center">Silahkan Isi Biodata</h3>

    <form action="/detail" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="input" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">NPM</label>
            <input type="input" class="form-control" id="" name="npm">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">DATE OF BIRTH</label>
            {{-- <input type="input" class="form-control" id="" name="ttl"> --}}
            <input class="datepicker form-control" name="ttl">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">CELLPHONE NUMBER</label>
            <input type="input" class="form-control" id="" name="handphone">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">EMAIL</label>
            <input type="input" class="form-control" id="" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">STUDY PROGRAM</label>
            <input type="input" class="form-control" id="" name="prodi">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
@endsection
