<form action="{{ route('portfolio.update',$id->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="titre" class="form-label">titre</label>
      <input name="titre" type="string" value="{{ $id->titre }}" class="form-control" id="titre" >

    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input name="image" type="string" value="{{ $id->image }}" class="form-control" id="image">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input name="description" type="text" value="{{ $id->description }}" class="form-control" id="description">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
