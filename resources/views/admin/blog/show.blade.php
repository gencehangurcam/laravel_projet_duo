@extends("layout.back")

@section('content')
    <h1>page show</h1>

    <div class="row my-4">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">titre : {{ $articles->titre }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">image : {{ $articles->image }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">description : {{ $articles->description }}</h6>
                    <hr>
                </div>
            </div>
        </div>
    </div>

@endsection
