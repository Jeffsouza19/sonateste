@extends('template')
@section('title', 'Clientes')

@section('content')  
    

        <span><a class="btn btn-success" href="{{route('clientes.add')}}">Adicionar Novo Contato</a></span><hr>


        @if(count($list)>0)
       <table class="table">
           <thead class="table-info">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($list as $item)
            <tbody>
                <tr>
                    <td class="nome">{{$item->nome,
                    }}
                    </td>
                    <td id="telefone">{{$item->telefone,
                    }}
                    </td>  
                    <td>{{$item->email,
                    }}
                    </td> 
                    <td><a class="btn btn-warning" href="{{ route('clientes.edit', ['id'=>$item->id])}}"> Editar</a></td>
                    <td><a class="btn btn-danger" href="{{ route('clientes.del', ['id'=>$item->id])}}"
                        onclick="return confirm('Tem certeza que deseja excluir?')"> Excluir </a></td>
                </tr> 
            </tbody>     
            @endforeach
           
       </table>
        @else
            <span>Não há itens a serem listados</span>
        @endif


       @endsection