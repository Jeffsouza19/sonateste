<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){

        $list = DB::select('SELECT * FROM cliente');

        return view('index', [
            'list'=> $list
        ]);
    }

    public function add(){

        return view('add');
    }

    public function addaction(Request $request ){

        if($request->filled(['nome','telefone','email'])){
            $nome = $request->input('nome');
            $telefone = $request->input('telefone');
            $email = $request->input('email');

            DB::insert('INSERT INTO cliente (nome, telefone, email) VALUE (:nome, :telefone, :email)',[
                'nome'=> $nome, 
                'telefone'=> $telefone,
                'email'=>$email
            ]);

            return redirect()->route('clientes.index');
        }
        else{
            
            return redirect()
                ->route('clientes.add')
                ->with('warning', 'Preencha todos os dados corretamente!');
        }
    }
    
    public function edit($id){

        $data = DB::select('SELECT * FROM cliente WHERE id=:id',[
            'id'=> $id
        ]);

        if(count($data) > 0){
            return view('edit',[
                'data'=> $data[0]
            ]);
        }else {
            return redirect() -> route('clientes.index');
        }
    }

    public function editaction(Request $request, $id){
        
        if($request ->filled('nome','telefone','email')){

            $nome = $request->input('nome');
            $telefone = $request->input('telefone');
            $email = $request->input('email');
            
            $data = DB::select('SELECT * FROM cliente WHERE id=:id',[
                'id'=> $id
            ]);
    
            if(count($data) > 0){
               
                DB::update('UPDATE cliente SET nome = :nome, telefone = :telefone, email = :email WHERE id = :id',[

                    'id'=>$id,
                    'nome'=>$nome,
                    'telefone'=>$telefone,
                    'email'=>$email
                ]);  
                
                return redirect() -> route('clientes.index');
            }
        }else{
            return redirect()
                ->route('clientes.edit',['id' => $id])
                ->with('warning', 'Preencha todos os dados corretamente!');
        }

    }

    public function del($id){
        DB::delete('DELETE FROM cliente WHERE id = :id',[
            'id' => $id 
        ]);

        return redirect()->route('clientes.index');

    }
}