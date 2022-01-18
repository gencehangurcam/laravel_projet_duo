@extends("layout.back")

@section("content")
<h1>form d add de new classee</h1>
<form action="{{ route("blog.update", $articles->id) }}" method='POST'>
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="titre">titre</label>
        <input type="text" value="{{ $articles->titre }}" id="titre" name="titre">
    </div>
    <div class="form-group">
        <label for="image">image</label>
        <input type="text" value="{{ $articles->image }}" id="image" name="image">
    </div>
    <div class="form-group">
        <label for="image">nombres d eleves</label>
        <input type="text" value="{{ $articles->description }}" id="description" name="description">
    </div>
    <button class="btn btn-success" type="submit">envoyer</button>

@endsection
