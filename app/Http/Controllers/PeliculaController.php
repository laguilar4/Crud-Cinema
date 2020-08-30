<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;
use App;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $peliculas =  App\Pelicula::all();
        $generos =App\Genero::all();

        return view('agregarpelicula',['peliculas' => $peliculas,'generos'=>$generos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $peliculaAgregar = new Pelicula;
        $peliculaAgregar->titulo = $request->input('titulo');
        $peliculaAgregar->sinopsis = $request->input('sinopsis');
        $peliculaAgregar->fechadelanzamiento = $request->input('fechadelanzamiento');
        $peliculaAgregar->genero_id = $request->input('genero_id');
        $peliculaAgregar->save();
        return redirect()->back()->with('exitoso', 'Se ha guardado correctamente, felicitaciones!');   

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
