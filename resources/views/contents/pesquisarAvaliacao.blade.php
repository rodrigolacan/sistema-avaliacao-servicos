@extends('layout.app')

@section('pesquisarAvaliacao-body')
    <x-util.search-bar method="GET" action="/search/avaliacao" />


    @if ($errors->any())
        <div id="error-box" class="fixed inset-0 flex items-center justify-center z-50">
            <div class="bg-red-600 border-l-4 border-red-800 text-white px-6 py-4 rounded-lg shadow-lg relative mb-4 w-3/4 sm:w-1/2 md:w-1/3">
                <strong class="font-bold text-xl">Erro(s)!</strong>
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                <!-- Botão para fechar a caixa de erro -->
                <button id="close-error-box" class="absolute top-0 right-0 mt-2 mr-2 text-white hover:text-gray-300" onclick="closeErrorBox()">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    @endif


    @if (session('error'))
        <div id="error-box" class="fixed inset-0 flex items-center justify-center z-50">
            <div class="bg-red-600 border-l-4 border-red-800 text-white px-6 py-4 rounded-lg shadow-lg relative mb-4 w-3/4 sm:w-1/2 md:w-1/3">
                <strong class="font-bold text-xl">Erro!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>

                <!-- Botão para fechar a caixa de erro -->
                <button id="close-error-box" class="absolute top-0 right-0 mt-2 mr-2 text-white hover:text-gray-300" onclick="closeErrorBox()">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    @if (!empty($avaliacoes))
        <x-avaliacao.table-avaliacao :avaliacoes="$avaliacoes" />
        <div>
            {{ $avaliacoes->links() }}
        </div>
    @endif
    <script>
        // Função para fechar a caixa de erro
        function closeErrorBox() {
            document.getElementById('error-box').style.display = 'none';
        }
    </script>
@endsection


