<!DOCTYPE html>
<html>
<head>
    <title>Avaliações</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Avaliações</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Requisição ID</th>
                <th>Evento Dia</th>
                <th>Rate Evento</th>
                <th>Rate Serviço</th>
                <th>Rate Cordialidade</th>
                <th>Rate Geral</th>
                <th>Elogios</th>
                <th>Melhorias</th>
                <th>Usuário ID</th>
                <th>Nome Usuário</th>
            </tr>
        </thead>
        <tbody>
            @foreach($avaliacoes as $avaliacao)
                <tr>
                    <td>{{ $avaliacao->id }}</td>
                    <td>{{ $avaliacao->requisicao_id }}</td>
                    <td>{{ $avaliacao->evento_dia }}</td>
                    <td>{{ $avaliacao->rate_evento }}</td>
                    <td>{{ $avaliacao->rate_servico }}</td>
                    <td>{{ $avaliacao->rate_cordialidade }}</td>
                    <td>{{ $avaliacao->rate_geral }}</td>
                    <td>{{ $avaliacao->elogios }}</td>
                    <td>{{ $avaliacao->melhorias }}</td>
                    <td>{{ $avaliacao->usuario_id }}</td>
                    <td>{{ $avaliacao->nome_usuario }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>