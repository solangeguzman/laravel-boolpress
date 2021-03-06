@extends('layouts.app')

@section('content')
<div class="button-create">
<a href="{{ route('posts.index')}}"><button class="button-new-p" class="bi bi-calendar-plus">Back to the Home List</button>  
</div>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Imagen</th>
      <th scope="col">Data</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
     <tr>
       <td>{{$post->id}}</td>
       <td>{{$post->title}}</td>
       <td><img src="{{$post->imagen}}" alt="picpost" width="400"/> </td>
       <td> {{$post->data}}</td>
       <td>  €{{$post->price}} </td>
     </tr>
  </tbody>
</table>
@endsection