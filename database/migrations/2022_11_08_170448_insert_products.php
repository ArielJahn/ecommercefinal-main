<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Categoria(['categoria' => 'Arranjos💐']);
        $cat->save();

        $cat2 = new \App\Models\Categoria(['categoria' => 'Flores 🌹']);
        $cat2->save();

        $prod = new \App\Models\Produto(['nome'=>'ARRANJO REDOMA + FLORES VERMELHAS', 'valor'=>'997', 'foto'=>'images/produto1.jpg', 'descricao'=>'', 'categoria_id'=>1]);
        $prod -> save();

        $prod2 = new \App\Models\Produto(['nome'=>'VASO VERMELHO + FLORES', 'valor'=>'322', 'foto'=>'images/produto2.jpg', 'descricao'=>'', 'categoria_id'=>1]);
        $prod2 -> save();

        $prod3 = new \App\Models\Produto(['nome'=>'KIT DE 3 VASOS + FLORES SORTIDAS', 'valor'=>'299', 'foto'=>'images/produto3.jpg', 'descricao'=>'', 'categoria_id'=>1]);
        $prod3 -> save();

        $prod4 = new \App\Models\Produto(['nome'=>'ARRANJO AZUL + FLORES AMARELAS', 'valor'=>'120', 'foto'=>'images/produto4.jpg', 'descricao'=>'', 'categoria_id'=>1]);
        $prod4 -> save();

        $prod5 = new \App\Models\Produto(['nome'=>'BUQUÊ 10 ROSAS VERMELHAS', 'valor'=>'85', 'foto'=>'images/produto5.jpg', 'descricao'=>'', 'categoria_id'=>2]);
        $prod5 -> save();

        $prod6 = new \App\Models\Produto(['nome'=>'BUQUÊ 15 TULIPAS BRANCAS', 'valor'=>'120', 'foto'=>'images/produto6.jpg', 'descricao'=>'', 'categoria_id'=>2]);
        $prod6 -> save();
        
        $prod7 = new \App\Models\Produto(['nome'=>'KIT DE FLORES PARA ARRANJO', 'valor'=>'77', 'foto'=>'images/produto7.jpg', 'descricao'=>'', 'categoria_id'=>2]);
        $prod7 -> save();

        $prod8 = new \App\Models\Produto(['nome'=>'BUQUÊ DE ROSAS ROSADAS', 'valor'=>'112', 'foto'=>'images/produto8.jpg', 'descricao'=>'', 'categoria_id'=>2]);
        $prod8 -> save();

        $prod9 = new \App\Models\Produto(['nome'=>'15 TULIPAS ROSAS PARA ARRANJO', 'valor'=>'85', 'foto'=>'images/produto9.jpg', 'descricao'=>'', 'categoria_id'=>2]);
        $prod9 -> save();

        $prod10 = new \App\Models\Produto(['nome'=>'PACOTE ROSAS SORTIDAS', 'valor'=>'155', 'foto'=>'images/produto10.jpg', 'descricao'=>'', 'categoria_id'=>2]);
        $prod10 -> save();

        $prod11 = new \App\Models\Produto(['nome'=>'BUQUE SYRINGA/FLOR LILÁS', 'valor'=>'188', 'foto'=>'images/produto11.jpg', 'descricao'=>'', 'categoria_id'=>2]);
        $prod11 -> save();
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
