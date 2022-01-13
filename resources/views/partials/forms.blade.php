<form action="{{ route('portfolio.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="titre" class="form-label">titre</label>
      <input name="titre" type="string" class="form-control" id="titre" >

    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input name="image" type="string" class="form-control" id="image">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input name="description" type="text" class="form-control" id="description">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
