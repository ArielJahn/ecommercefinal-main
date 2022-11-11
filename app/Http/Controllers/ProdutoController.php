<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $data = [];

        $listaprodutos = Produto::all();
        $data["lista"] = $listaprodutos;

        return view("home", $data);
    }

    public function categoria(Request $request, $idcategoria = 0){
        $data = [];
        //select from categorias
        $listaCategorias = Categoria::all();

        //select from produtos limit 11 ou + se for acrescentado
        $queryProduto = Produto::limit(11);

        if($idcategoria != 0){
            $queryProduto->where("categoria_id", $idcategoria);
        }

        $listaProdutos = $queryProduto->get();

        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;
        return view("categoria", $data);
    }


    public function adicionarCarrinho(Request $request, $idProduto = 0){
            //busca prod por id
        $prod = Produto::find($idProduto);

        if($prod){

            $carrinho = session('cart', []);

            array_push($carrinho, $prod);
            session(['cart' => $carrinho]);
        }

        return redirect()->route("home");

    }


    public function verCarrinho(Request $request){
        $carrinho = session('cart', []);
        $data = ['cart' => $carrinho];
        

        return view("carrinho", $data);

    }

    public function excluirCarrinho(Request $request, $indice){
        $carrinho = session('cart', []);
        if(isset($carrinho[$indice])){
            unset($carrinho[$indice]);
        }
        session(["cart" => $carrinho]);
        return redirect()->route("ver_carrinho");
    }
}
