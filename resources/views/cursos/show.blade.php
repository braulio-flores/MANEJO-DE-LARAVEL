@extends('layouts/plantilla')

@section('title','Curso '.$curso->nombre)
@section('content')
    <a href="{{route('cursos.index')}}">Volver a los cursos</a>
    <h1>Aqui veras el curso {{$curso->nombre}}</h1> 
    {{--Podemos sustituir el echo por {{}} con en JS ${}--}}
    {{-- <h2><?php echo $curso2;?></h2> --}}
    <p><strong>Categoria:</strong> {{$curso->categoria}}</p>
    <p><strong>Descripcion:</strong> {{$curso->description}}</p>
    <a href="{{route('cursos.edit',$curso->id)}}">Editar este curso</a>
    <br>
    <form action="{{route('cursos.destroy',$curso->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">ELIMINAR este curso</button>
    </form>
@endsection