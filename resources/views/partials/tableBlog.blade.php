<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">image</th>
            <th scope="col">description</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $articles->shuffle() as $item )
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->titre }}</td>
                <td>{{ $item->image }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <form action="{{ route('blog.destroy', $item->id) }}" method="Post">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route("blog.show", $item->id) }}"><button class="btn btn-primary">plus de detail</button></a>
                    <a href="{{ route("blog.edit", $item->id) }}"><button class="btn btn-success">modifier</button></a>
                </td>
            </tr>
        @empty
            <tr>
                <th>coming soon</th>
            </tr>
        @endforelse
    </tbody>
</table>
