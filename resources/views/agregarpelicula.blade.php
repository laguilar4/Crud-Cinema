@extends('layouts.master')

@section('content')
        <div>
                <h3 class="text-center mb-4">Agregar Peliculas</h3>

                <form action="{{route('store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el titulo">
                        </div>
                        <div class="form-group">
                            <label>Sinopsis</label>
                            <input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="Ingrese la sinopsis">
                        </div>
                        <div class="form-group">
                            <label>Fecha de Lanzamiento</label>
                            <input type="date" class="form-control" id="fechadelanzamiento" name="fechadelanzamiento">
                        </div>
                        <div class="form-group">
                            <label>Genero</label>
                            <select name="genero_id" class="form-control">
                                <option value="">Seleccione</option>
                                @foreach ($generos as $value)
                                    <option value="{{$value->id}}">{{$value->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                </form>



                @if (Session::has('exitoso'))
                    <div class="alert alert-success">
                    {{Session::get('exitoso')}}
                    </div>
                @endif
            </div>
        </div>
    </div> 
@endsection