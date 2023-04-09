@extends('layouts.app')
@section('content')
@section('title') index @endsection
<a href="{{route('posts.create')}}" type="button" class="btn btn-success">Create Post</a>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<table class="table table-striped table-hover">
    <thead >
      <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th scope="col">description</th>
        <th scope="col">posted_by</th>
        <th scope="col">Created At</th>
        <th scope="col">Actions</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th scope="row"> {{$post['id']}} </th>
            <td>{{$post['Title']}}</td>
            <td>{{$post['description']}}</td>
            <td> {{$post['posted_by']}} </td>
            <td> {{$post['createdat']}} </td>
            <td>
              <a href="{{route('posts.show',$post['id'])}}" type="button" class="btn btn-info">View</a> 
              <a href="{{route('posts.update',$post['id'])}}" type="button" class="btn btn-primary">Edit</a>
              <a href="/posts/{{$post['id']}}" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
        @endsection('content')
    </tbody>
  </table>