<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARIFLOWER Botânica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="{{ route('home') }}" class="navbar-brand">‎ ‎  ‎ ARIFLOWER 🌷</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('categoria') }}" class="nav-link">Categorias</a>
                <a href="{{ route('cadastrar') }}" class="nav-link">Cadastrar</a>
            </div>
        </div>
        <a href="{{ route('ver_carrinho')  }}" class="btn btn-sm"><H4>🛒</H4></a>
    </nav>

    <div class="container">
        <div class="row">
            <!--adicionar conteúdo-->
            @yield("conteudo")


        </div>
    </div>
          
</body>
</html>