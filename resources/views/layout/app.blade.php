<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Avaliação de Serviços - SIAS</title>
    @vite('resources/css/app.css')
</head>

<body class="flex">
    <x-aside.menu />

    <div class="flex-1 p-6">
        @yield('avaliacao-body')
        @yield('pesquisarRequisicao-body')
    </div>
</body>

</html>
