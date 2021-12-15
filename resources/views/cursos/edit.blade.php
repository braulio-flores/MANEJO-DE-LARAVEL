@extends('layouts/plantilla')

@section('title','Edit Curso '.$id->nombre)
@section('content')
    <h1>Editar curso {{$id->nombre}}</h1>
    {{-- <h1>{{route('cursos.store')}}</h1> ESTE LO USAMOS PARA DESPLEGAR LA RUTA Y VER QUE TRAIA, NO SIRVE PARA FUNCIONAMIENTO--}}
    {{-- <h1>{{$id}}</h1> --}}

    <form action="{{route('cursos.modify',$id->id)}}" method="POST">
        @csrf
        @method('put')
        <label>Nombre</label>
        <input type="text" name="name" value="{{$id->nombre}}"><br>
        
        <label>Descripcion</label>
        <textarea name="description">{{$id->description}}</textarea><br>

        <label>Categoria</label>
        <input type="text" name="categ" value="{{$id->categoria}}"><br><br>
        <button type="submit">Actualizar  Rregistro</button>
        
    </form>
@endsection