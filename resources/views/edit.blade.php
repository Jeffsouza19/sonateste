@extends('template')
@section('title', 'Editar')

@section('content')    

@if(session('warning'))
    <span class="aviso">
    {{ session('warning')}}
    </span>
@endif
<div>
    <form method="POST">
        @csrf

        <span>Nome:</span><br>
        <input type="text" name="nome" value="{{$data->nome}}"><br><br>

        <span>Telefone</span><br>
        <input type="tel" name="telefone" value="{{$data->telefone}}" id="telefone" pattern=".{13,}"><br><br>

        <span>Email:</span><br>
        <input type="email" name="email" value="{{$data->email}}"><br><br>

        <input class="btn btn-success" type="submit" value="Confimar">
        <a class="btn btn-danger" href="{{route('clientes.index')}}">  Cancelar </a>

    </form>
</div>
@endsection