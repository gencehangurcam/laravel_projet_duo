@extends('layout.back')

@section('content')
<div class="content w-75 p-1">
    <h1 class="text-center py-5">page blog</h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary m-2" href="{{ route('blog.create') }}">create</a>
        <a class="btn btn-primary m-2" href="{{ route('admin') }}">return</a>
    </div>
    @include('partials.tableBlog')
@endsection
