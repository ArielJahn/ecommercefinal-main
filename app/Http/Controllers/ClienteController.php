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

        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);
        dd($usuario);

        $endereco = new Endereco($values);
        dd($endereco);


        return redirect()->route("cadastrar");
    }
}
