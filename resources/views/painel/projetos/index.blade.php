@extends('adminlte::page')

@section('title', 'Projetos')

@section('content_header')
    <h1>Projetos</h1>

    <div class="row mt-3">
        <a href="{{route('projeto.create')}}" class="btn btn-success">Novo Projeto</a>
    </div>

    <div class="row mt-3">
<table class="table">
  <thead>
    <tr>

      <th scope="col">Titulo</th>
      <th scope="col">Descrição</th>
      <th scope="col">Link</th>
      <th scope="col">Miniatura</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($projetos as $projeto)
    <tr>

      <td>{{$projeto->titulo}}</td>
      <td>{{$projeto->descricao}}</td>
      <td>{{$projeto->link}}</td>
      <td><img src="{{Storage::url($projeto->capa)}}" width="100px"></td>
      <td><a href="{{route('projeto.destroy', $projeto->id)}}">Excluir</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
@stop

@section('content')

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
