@extends('layouts.master')
@section('content')      
    <h3 class="text-center">Editar Pelicula {{$peliculaActualizar->id}}</h3>
    <form action="{{route('update',$peliculaActualizar->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{$peliculaActualizar->titulo}}" aria-describedby="tituloAyuda" placeholder="Ingrese el titulo a editar">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="sinopsis" name="sinopsis" value="{{$peliculaActualizar->sinopsis}}" aria-describedby="sinopsisAyuda" placeholder="Ingrese la sipnosis a editar">
        </div>
        <div class="form-group">
            <input type="date" class="form-control" id="fechadelanzamiento" name="fechadelanzamiento" value="{{$peliculaActualizar->fechadelanzamiento}}" aria-describedby="fechadelanzamientoAyuda">
        </div>
        <div class="form-group">
            <label>Genero</label>
            <select name="genero_id" aria-describedby="genero_idAyuda" class="form-control">
                <option value="">Seleccione</option>
                @foreach ($generos2 as $value)
                    <option value="{{$value->id}}">{{$value->nombre}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
    @if (Session::has('editado'))
        <div class="alert alert-success">
        {{Session::get('editado')}}
            <div class="col-md-6">
            </div>
        </div>
    @endif

    @endsection