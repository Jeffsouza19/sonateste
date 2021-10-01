@extends('template')
@section('title', 'Welcome !')

@section('content')
<div class="inicio"> 
<h2> Controle de Clientes</h2>
   <span> Este é um projeto desenvolvido para um teste de conhecimentos sobre laravel,
    no qual inclui um CRUD basico, com as funções necessarias para um CRUD. <br>
    Para Acessar o sistema desenvolvido </span>
    <a href="{{route('clientes.index')}}"> clique no link </a> ou no botao abaixo. <br><br>

    <a class="btn btn-lg btn-info " href="{{route('clientes.index')}}"> Acessar</a>

</div>



@endsection