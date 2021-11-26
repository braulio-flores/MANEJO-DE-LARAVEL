@extends('layouts/plantilla')

@section('title','curso '.$curso)
@section('content')
    <h1>Aqui veras el curso {{$curso}}</h1> 
    {{--Podemos sustituir el echo por {{}} con en JS ${}--}}
    <h2><?php echo $curso2;?></h2>
@endsection