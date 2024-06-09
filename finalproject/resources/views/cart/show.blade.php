@extends('layouts.master')

@section('title')
    Detail Profiles
@endsection

@section('content')
    <p>{{$casts->nama}}</p>
    <p>{{$casts->umur}}</p>
    <p>{{$casts->bio}}</p>

    <a href="/profiles" class="btn btn-sm btn-secondary">Kembali</a>
@endsection