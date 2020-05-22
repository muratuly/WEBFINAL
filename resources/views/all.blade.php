@extends('layouts.main')
@section('code')
@section('title','Database')
<!--login || registration -->
@include('layouts.log')
<!--                      -->
<div class="container mt-3 mb-5">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Movie name</th>
        <th scope="col">Year</th>
        <th scope="col">Producer</th>
        <th scope="col">Starring</th>
        <th scope="col"> </th>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($movies as $movie)
        <tr>
            <th scope="row">{{$movie->id}}</th>
            <td>{{$movie->name}}</td>
            <td>{{$movie->year}}</td>
            <td>{{$movie->producer}}</td>
            <td>{{$movie->starring}}</td>
            <td><a href="{{ route('edit',$movie->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            or
            <form method="POST" id="delete-form- {{ $movie->id }}" action="{{ route('delete', $movie->id) }}" style="display: none">
                        {{csrf_field()}}
                        {{method_field('delete')}}
                    </form>

                    <button onclick="if (confirm('Are you sure to delete this field')){
                        event.preventDefault();
                        document.getElementById('delete-form- {{ $movie->id }}').submit();
                            }else {
                                event.preventDefault();
                        }
                          "><i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$movies->links()}}
</div>
@endsection
