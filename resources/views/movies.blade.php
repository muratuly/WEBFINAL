@extends('layouts.main')
@section('code')
@section('title','Database')
<!--login || registration -->
@include('layouts.log')
<!--                      -->

<div class="container mt-5 mb-5 w-50">
        @if($errors->any())
             @foreach($errors->all() as $error)
                 <div class="alert alert-danger" role="alert">
                     {{$error}}
                 </div>
             @endforeach
         @endif
         <form action="{{route('store')}}" method="POST">
        {{ csrf_field() }}
    <form>
      <div class="form-group">
        <label for="name">Movie name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Movie name">
      </div>
      <div class="form-group">
        <label for="year">Year</label>
        <input type="text" name="year" class="form-control" id="year" placeholder="Movie year">
      </div>
      <div class="form-group">
        <label for="producer">Producer</label>
        <input type="text" name="producer" class="form-control" id="producer" placeholder="Producer">
      </div>
      <div class="form-group">
        <label for="Starring">Starring</label>
        <input type="text" name="starring" class="form-control" id="Starring" placeholder="Starring">
      </div>
      <button type="submit" href="{{route('all')}}" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
