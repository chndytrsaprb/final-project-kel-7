@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'Show Category')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Show Category</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <th>Description</
=======
@section('title')
    Detail Category
@endsection

@section('content')
    <p>{{$casts->name}}</p>

    <a href="/category" class="btn btn-sm btn-secondary">Kembali</a>
@endsection
>>>>>>> 71daa77cbf1ba9fe70c9c2f8038ab9b020604754
