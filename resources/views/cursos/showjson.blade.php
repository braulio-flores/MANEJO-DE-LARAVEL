@extends('layouts/plantilla')

@section('title','3 cursos')
@section('content')
    <h1>AQUI SE MUESTRA UN JSON</h1>
    <?php $var = $array;?>
    <h2><?php echo json_encode($array);?></h2>
    <h2><?php echo json_encode($array['curso 1']);?></h2>
@endsection

