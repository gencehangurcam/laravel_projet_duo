@extends('layout.index')


@section('content')
<div class="d-flex">
    @include('partials.nav')
     <div class="content">
         <h1 class="text-center py-5">page admin/ Portfolio-Edit</h1>
         <a class="btn btn-primary" href="{{ route("portfolio.index") }}">Retour</a>
     </div>

    </div>
    @include('partials.forms-edit')

@endsection
