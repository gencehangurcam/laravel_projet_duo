@extends('layout.index')

@section('content')

<h1 class="py-5 text-center">blog create</h1>
<button class="btn btn-danger"><a href="{{ route("blog.create") }}">retour</a></button>
@include('partials.formsBlog')


@endsection
