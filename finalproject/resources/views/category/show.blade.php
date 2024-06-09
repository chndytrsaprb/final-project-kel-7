@extends('layouts.app')

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
