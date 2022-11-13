<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
class ClienteController extends Controller
{
    public function cadastrar(Request $request){
        $data = [];

        return view("cadastrar", $data);
    }

    public function cadastrarCliente(Request $request){
        //todos os valores do form
        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);
        $usuario->login = $request->input("email", "");
        $senha = $request->input("password", "");

        $endereco = new Endereco($values);
        $endereco->logradouro = $request->input("endereco", "");
       

        try{
            $usuario->save(); //salvando o user
            $endereco->usuario_id = $usuario->id; //conexao entre as tables
            $endereco->save();  //salvando o endereço
            
          
        }catch(\Exception){
            
        }

        return redirect()->route("cadastrar");
    }
}
