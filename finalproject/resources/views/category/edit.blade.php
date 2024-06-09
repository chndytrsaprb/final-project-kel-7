@extends('layouts.master')

@section('title')

@endsection

@section('content')
<form action="/category/{{ $category->id }}" method="post">
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
        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection