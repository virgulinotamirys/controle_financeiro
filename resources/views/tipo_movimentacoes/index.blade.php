<html>
    <head>
        <title> Controle Financeiro </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipo_movimentacoes as $tipo_movimentacao)
                <tr>
                    <td>{{ $tipo_movimentacao->id }}</td>
                    <td>{{ $tipo_movimentacao->nome }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </body>
</html>