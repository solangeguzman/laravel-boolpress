@extends('layouts.app')

@section('content')

<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Imagen</th>
      <th scope="col">Data</th>
      <th scope="col">Price</th>
      <th scope="col">More Information</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
     <tr>
      <th scope="row"> {{$post->id}} </th>
      <td> {{$post->title}} </td>
      <td> <img src="{{$post->imagen}}" alt="picpost" width="50"/> </td>
      <td> {{$post->data}}</td>
      <td>  €{{$post->price}} </td>
      <td><a href="{{ route('posts.show', $post)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg></a></td>  
     </tr> 
    @endforeach
  </tbody>
</table>



@endsection