<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class UserController extends Controller
{
    //
    public function index(){
      return view('welcome');
    }
    public function genres(){
      return view('genres');
    }

    public function create(){
      return view('movies');
    }
    public function data(){
      $movies = Movies::paginate(5);
      return view('all',compact('movies'));
    }
    public function store(Request $request)
    {
      $this-> validate($request,[
        'name'=>'required',
        'year'=>'required',
        'producer'=>'required',
        'starring'=>'required'
      ]);
      $movie = new movies();
      $movie->name = $request->name;
      $movie->year = $request->year;
      $movie->producer = $request->producer;
      $movie->starring = $request->starring;
      $movie->save();

      return redirect(route('home'))->with('successMsg','Movie successfully added!');
    }

    public function edit($id){
      $movie = Movies::find($id);
      return view('edit',compact('movie'));
    }

    public function update(Request $req, $id){
      $this->validate($req,[
        'name'=>'required',
        'year'=>'required',
        'producer'=>'required',
        'starring'=>'required'
      ]);
      $movie = Movies::find($id);
      $movie -> name = $req -> name;
      $movie -> year = $req -> year;
      $movie -> producer = $req -> producer;
      $movie -> starring = $req -> starring;
      $movie -> save();

      return redirect(route('home'))->with('successMsg','Movie successfully updated');
    }

    public function delete($id){
        Movies::find($id)->delete();
        return redirect(route('home'))->with('successMsg','Movie delete successfully');
    }
}
