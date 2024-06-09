@extends('layouts.app')

@section('title', 'Create Category')

@section('content')
<<<<<<< HEAD
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Category</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
=======
<form action="/category" method="post">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
>>>>>>> 71daa77cbf1ba9fe70c9c2f8038ab9b020604754
