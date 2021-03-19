<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto Slab', serif;
        }

    </style>
</head>
<body>
    <div class="container">
    <!-- Inicio do cabeçalho -->
        <div class="row mt-2">
            <p class="fs-1">
                Página inicial
            </p>

            <h2>Calculadora</h2>
        </div>
        <!-- Final do Cab -->

            <a href="{{ route('carregarSoma')}}" class="btn btn-primary active" aria-current="page">Somar</a><br>

            <a href="{{ route('carregarSub')}}" class="btn btn-primary active" aria-current="page">Subtrair</a><br>

            <a href="{{ route('carregarDivide')}}" class="btn btn-primary active" aria-current="page">Dividir</a><br>

            <a href="{{ route('carregarMulti')}}" class="btn btn-primary active" aria-current="page">Multiplicar</a>

        <!-- Inicio do Rodapé -->
        <div class="row mt-2">
            <hr>
            <p class="text-center">
                Todos os direitos reservados - Igor Leonardo Soares Bezerra - 2021
            </p>
        </div>
    <!-- Final do Rod -->

    </div>
</body>
</html>