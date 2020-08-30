@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-7">            
        <table class="table table-striped table-hover">
                <thead class="table table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Sinopsis</th>
                    <th scope="col">Fecha de Lanzamiento</th>
                    <th scope="col">Genero</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($peliculas as $item)
                    <tr>                        
                        <td>{{$item->id}}</td>
                        <td>{{$item->titulo}}</td>
                        <td>{{$item->sinopsis}}</td>  
                        <td>{{$item->fechadelanzamiento}}</td> 
                        <td>{{$item->genero_id}}</td> 
                        @endforeach
                        </tr>                      
                  
                    
                <tr>   

                </tr>
                </tbody>
            </table>
@endsection