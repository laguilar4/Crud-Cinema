@extends('layouts.master')

@section('content')
        <div>
                <h3 class="text-center mb-4">Agregar Genero</h3>
                <form action="{{route('store2')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nombre de Genero</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese un nombre para genero de pelicula">
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