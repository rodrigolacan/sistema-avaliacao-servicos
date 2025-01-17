@extends('layout.app')

@section('avaliacao-body')
                
<section">
    <div class="container px-6 py-10 mx-auto">
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-2">
            <a href="{{ route('pesquisar.requisicao') }}">
            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                style="background-image:url('https://images.unsplash.com/photo-1621609764180-2ca554a9d6f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Avaliar Requisições</h2>
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Avalie os serviços</p>
                </div>
            </div>
            </a>
            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                style="background-image:url('https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Requisições Avaliadas</h2>
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Consultar Requisições que já foram avaliadas</p>
                </div>
            </div>
        </div>
    </div>
</section>

        
@endsection
