<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;
use App\Req;


class MovieController extends Controller
{
    //
    public function index()
    {
        // return view('index')->with('movies', Movie::all());
        return view('index')->with('movies', Movie::all()->sortBy('name'));
    }
    public function show($id)
    {
    	$movie=Movie::find($id);
        return view('detailmovie')->with('movie', $movie);
    } 
    public function commentStore(Request $request, $id)
    {
        $movie=Movie::find($id);
        Comment::create([
            'user_id' => auth()->user()->id,
            'movie_id' => $movie->id,
            'komentar' => $request->comment
        ]);
        return redirect()->route('detailmovie.show', $movie->id);
    }
    public function teater()
    {
        return view('teater')->with('movies', Movie::all());
    }

    public function us()
    {
        return view('us');
    }

    public function requestStore(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:20',
            'req' => 'required',
        ]);

        $req = new Req;
        $req->name = auth()->user()->name ;
        $req->req = $request->get('request');

        $req->save();
        return redirect()->route('req.index')->with('success', 'Berhasil Menambahkan Request');
    }
}
