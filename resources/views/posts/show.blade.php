@extends('layouts.app')

@section('content')
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">imagen</th>
      <th scope="col">data</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
     <tr>
       <td>{{$post->id}}</td>
       <td>{{$post->title}}</td>
       <td><img src="{{$post->imagen}}" alt="picpost" width="50"/> </td>
       <td> {{$post->data}}</td>
       <td>  {{$post->price}} </td>
     </tr>
  </tbody>
</table>
@endsection