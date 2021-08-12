<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.content.index')->with('movies', Movie::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:20',
            'image' => 'required',
            'deskripsi' => 'required',
            'durasi' => 'required',
            'teater' => 'required',
        ]);

        $movie = new Movie;
        $movie->name = $request->get('name');
        $movie->deskripsi = $request->get('deskripsi');
        $movie->image = $request->get('image');
        $movie->durasi = $request->get('durasi');
        $movie->teater = $request->get('teater');

        $movie->save();
        return redirect()->route('admin.content.index')->with('success', 'Berhasil Menambahkan Movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('admin.content.edit', compact('movie', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:20',
            'image' => 'required',
            'deskripsi' => 'required',
            'durasi' => 'required',
            'teater' => 'required',
        ]);

        $movie = Movie::find($id);
        $movie->name = $request->get('name');
        $movie->durasi = $request->get('durasi');
        $movie->deskripsi=$request->get('deskripsi');
        $movie->image=$request->get('image');
        $movie->teater = $request->get('teater');
        


        $movie->save();

        return redirect()->route('admin.content.index')->with('success', 'Data Berhasil di Update');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $movie = Movie::find($id);
        $movie->delete();

        return redirect()->route('admin.content.index')->with('delete', 'Data Berhasil di Delete');
    }
}
