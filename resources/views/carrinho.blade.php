@extends("layout")
@section("conteudo")
    <h3>Carrinho</h3>

    @if(isset($cart) && count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <TH></TH>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
            </thead>

            <tbody>
            @foreach($cart as $indice => $p)
                <tr>
                    <td>
                        <a href="{{  route('carrinho_excluir', ['indice' => $indice])  }}" class="btn btn-danger btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                    </td>
                    <td>{{ $p->nome}}</td>
                    <td><img src="{{  asset($p->foto)  }}" height="50"></td>
                    <td>{{ $p->valor}}</td>
                    <td>{{ $p->descricao}}</td>
                </tr>  
            @endforeach          
            </tbody>
        </table>

    @else
        <p>Nenhum item no carrinho</p>
    @endif
@endsection