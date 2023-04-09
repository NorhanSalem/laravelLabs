
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  @extends('layouts.app')
  @section('content')
  @section('title') create @endsection
  <div class="m-3 col-8">
    <label for="formGroupExampleInput" class="form-label">Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" >
  </div>
  <div class="m-3 col-8">
    <label for="formGroupExampleInput2" class="form-label">Description</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="m-3 col-8">
    <label for="formGroupExampleInput2" class="form-label">Posted By</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="m-3 col-8">
    <button class="btn btn-primary" type="submit" disabled>Submit</button>
  </div>
  @endsection('content')
