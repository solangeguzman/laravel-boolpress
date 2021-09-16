@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
             @foreach($errors->all() as $error)
                <li> {{$error}} </li>
             @endforeach
         </ul>
      </div>
    @endif
    <form action="{{ route('posts.store') }}" method="POST">
       @csrf
        <div class="form-group">
           <label for="">Title</label>
           <input type="text" class="form-control" name="title" id="title"> 
        </div>
        
        <div class="form-group">
            <label for="">Imagen</label>
            <input type="text" class="form-control" name="imagen" id="imagen">
        </div>
        
        <div class="form-group">
            <label for="">Data</label>
            <input type="datetime-local" class="form-control" step="60" name="data" id="data">
        </div>
        
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" step="0.01"class="form-control" name="price" id="price">
        </div>
        
        <!-- <input type="submit" value="save"> -->
        <button type="submit" class="btn btn-primary">Save</button>
        <span class="button-create">
          <a href="{{ route('posts.index')}}"><button class="button-new-p" class="bi bi-calendar-plus">Come back</button>  
        </span>
    </form>  

</div>

@endsection