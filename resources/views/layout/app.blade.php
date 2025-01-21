<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Avaliação de Serviços - SIAS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex h-screen">
    <x-aside.menu class="w-64 text-white" />

    <div class="flex-1 p-6 overflow-y-auto bg-gray-800">
        @yield('avaliacao-body')
        @yield('pesquisarRequisicao-body')
        @yield('pesquisarAvaliacao-body')
    </div>
</body>

</html>
