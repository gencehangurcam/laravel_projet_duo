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
              <form action="{{ route("portfolio.destroy",$item->id) }}"method="Post">
                  @csrf
                  @method("DELETE")
                  <button class="btn btn-danger">Delete</button>

              </form>
              <a class="btn btn-primary" href="{{ route("portfolio.show",$item->id) }}">show</a>
              <a class="btn btn-success" href="{{ route("portfolio.edit",$item->id) }}">Edit</a>
          </td>

        </tr>
        @empty
        <tr>
            <th>coming soon</th>
        </tr>

        @endforelse



    </tbody>
  </table>
