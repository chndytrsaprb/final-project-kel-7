@extends('layouts.master')

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