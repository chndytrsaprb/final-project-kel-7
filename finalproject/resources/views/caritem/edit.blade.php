@extends('layouts.master')

@section('title')

@endsection

@section('content')
<form action="/profies/{{ $profiles->id }}" method="post">
    {{-- validation --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- form input --}}
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" value="{{ $casts->nama }}">
    </div>
    <div class="form-group">
        <label>Umur</label>
        <input type="text" class="form-control" name="umur" value="{{ $casts->umur }}">
    </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" id="" cols="30" rows="10" class="form-control">{{ $casts->bio }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection