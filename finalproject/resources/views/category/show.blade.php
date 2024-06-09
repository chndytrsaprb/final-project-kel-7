@extends('layouts.master')

@section('title')
    Detail Category
@endsection

@section('content')
    <p>{{$casts->name}}</p>

    <a href="/category" class="btn btn-sm btn-secondary">Kembali</a>
@endsection