@extends('layout.index')

@section('content')
<div class="content w-75 p-3">
    <h1 class="text-center py-5">page portfolio</h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary" href="{{ route('portfolio.create') }}">create</a>

    </div>
    @include('partials.tablePortfolio')

@endsection
