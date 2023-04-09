
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   @extends('layouts.app')
   @section('content')
   @section('title') show @endsection
   @foreach ($post as $post)
<div class="card col-6 m-5">
    <div class="card-header ">
      {{$post['Title']}}
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        {{$post['description']}}
        {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
      </blockquote>
    </div>
  </div> 
@endforeach
@endsection('content')