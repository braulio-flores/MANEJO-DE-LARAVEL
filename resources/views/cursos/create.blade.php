@extends('layouts/plantilla')

@section('title','Create')
@section('content')
    <h1>Aqui podras crear un curso</h1>
    <h1>{{route('cursos.store')}}</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>Nombre</label>
        <input type="text" name="nombre" value="{{old('nombre')}}"><br>
        @error('nombre')
                <small>*{{$message}}</small>
                <br>
            <br>
        @enderror
        
        <label>Descripcion</label>
        <textarea name="description"></textarea><br>
        @error('description')
                <small>*{{$message}}</small><br>
            <br>
        @enderror

        <label>Categoria</label>
        <input type="text" name="categoria"><br>
        @error('categoria')
                <small>*{{$message}}</small>
                <br>
            <br>
        @enderror
        <button type="submit">Enviar  Form</button>
        
    </form>
@endsection