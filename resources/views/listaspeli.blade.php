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
                    <th scope="col">Genero_ID</th>
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
                        <td>
                            <a href="{{route('editar',$item->id)}}" class="btn btn-warning">Editar</a>
                            <form action="{{route('eliminar',$item->id)}}"  method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        
                        </td>
                        @endforeach
                        </tr>                      
                  
                    
                <tr>   

                </tr>
                </tbody>
            </table>
            @if (Session::has('eliminado'))
            <div class="alert alert-success">
            {{Session::get('eliminado')}}
                
            </div>
            @endif
@endsection