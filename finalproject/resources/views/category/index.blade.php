@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'Categories')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Categories</h3>
        <div class="card-tools">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
=======
@section('title')
    Category
@endsection

@section('content')
<a href="/category/create" class="btn btn-sm btn-primary">Add Category</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($category as $key=>$item)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$item->name}}</td>
            <td>
                <form action="/category/{{$item->id}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/category/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
                    <a href="/category/{{$item->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <th>Tidak ada category</th>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
>>>>>>> 71daa77cbf1ba9fe70c9c2f8038ab9b020604754
