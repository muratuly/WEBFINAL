@extends('layouts.main')
@section('code')
@section('title','Database')
<!--login || registration -->
@include('layouts.log')
<!--                      -->

<div class="container mt-5 mb-5 w-50">
  <h3 class="text-center">Add movie</h3>
        @if($errors->any())
             @foreach($errors->all() as $error)
                 <div class="alert alert-danger" role="alert">
                     {{$error}}
                 </div>
             @endforeach
         @endif
         <form action="{{route('update',$movie->id)}}" method="POST">
        {{ csrf_field() }}
    <form>
      <div class="form-group">
        <label for="name">Movie name</label>
        <input type="text" name="name" value="{{$movie->name}}" class="form-control" id="name" aria-describedby="name" placeholder="Movie name">
      </div>
      <div class="form-group">
        <label for="year">Year</label>
        <input type="text" name="year"  value="{{$movie->year}}" class="form-control" id="year" placeholder="Movie year">
      </div>
      <div class="form-group">
        <label for="producer">Producer</label>
        <input type="text" name="producer" value="{{$movie->producer}}" class="form-control" id="producer" placeholder="Producer">
      </div>
      <div class="form-group">
        <label for="Starring">Starring</label>
        <input type="text" name="starring" value="{{$movie->starring}}" class="form-control" id="Starring" placeholder="Starring">
      </div>
      <button type="submit"class="btn btn-primary">Update date</button>
    </form>
</div>
@endsection
