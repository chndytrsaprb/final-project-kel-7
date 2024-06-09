@extends('layouts.master')

@section('title')
    Add Categorys
@endsection

@section('content')
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