@extends('layout.index')

@section('content')

<h1 class="text-center my-5">page show</h1>

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-body">
                <h5 class="card-title">Titre : {{$id->titre}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">IMG :{{$id->image}}</h6>
                <p class="card-text">Description:{{$id->description}}</p>
                <a href="{{route('portfolio.index')}}" class="btn btn-success">Retour</a>
                <form action="{{route('portfolio.destroy', $id->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
