@extends('layouts/plantilla')

@section('title','Cursos')
@section('content')
    <h1>Esta es la pagina principal de los cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    {{-- <p>{{$students}}</p> ESTO SOLO SERIA PARA DESPLEGAR LA COLECCION DE UNA MANERA CRUDA --}}
    
    <h2>CAMBIO</h2>
    @foreach ($students as $item)
        <a href="{{route('cursos.showComplete',$item->id)}}">{{$item->nombre}}</a><br>
        {{-- {{route('cursos.show',['curso','curso2'])}}<br> --}}
    @endforeach
    {{$students->links()}}
@endsection