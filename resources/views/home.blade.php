<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('/css/app.css'')}}">
    <title>Document</title>
</head>


<body>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
 </div>
  @foreach($allPosts as $post)
  <br>
  <div class="container cont-principale">
      <h3>{{$post->title}}</h3>
      <span><img src="{{$post->imagen}}"  width="1100" height="500" alt=""></span> 
      <p>Data del post: {{$post->data}} </p>
      <p>Prezzo pubblicità: {{$post->price}}</p> 
      <hr>
  </div>
  @endforeach
@endsection
</body>
</html>