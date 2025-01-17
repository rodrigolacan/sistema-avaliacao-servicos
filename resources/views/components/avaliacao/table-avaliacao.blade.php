<section class="container px-4 mx-auto" x-data="{ selectedAvaliacao: null }">
    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">

                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <button class="flex items-center gap-x-3 focus:outline-none">
                                        <span>Número e Ano</span>

                                        <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                        </svg>
                                    </button>
                                </th>

                                <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Situação
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Data da Entrega
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Número e Tipo</th>
    
                                <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">Avaliar</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            @foreach ($avaliacoes as $avaliacao )
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                        <div>
                                            <h2 class="font-medium text-gray-800 dark:text-white ">{{ $avaliacao->requisicao->numano }}</h2>
                                        </div>
                                    </td>
                                    <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                        <div 
                                            class="inline px-3 py-1 text-sm font-normal rounded-full gap-x-2 
                                            {{ $avaliacao->requisicao->situacao === 'APROVADA' ? 'text-emerald-500 bg-emerald-100/60' : 'text-red-500 bg-red-100/60' }} 
                                            dark:bg-gray-800">
                                            {{ $avaliacao->requisicao->situacao }}
                                        </div>
                                    </td>                                
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <h4 class="text-gray-700 dark:text-gray-200">{{ $avaliacao->requisicao->data_entrega }}</h4>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <h4 class="text-gray-700 dark:text-gray-200">{{ $avaliacao->requisicao->numano_tipo }}</h4>
                                        </div>
                                    </td>

                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <button 
                                            class="bg-emerald-500 hover:bg-emerald-400 px-4 py-2 text-white transition-colors duration-200 rounded-lg focus:outline-none"
                                            @click="selectedAvaliacao = {{ $avaliacao }}">
                                            <span>Visualizar Avaliação</span>
                                        </button>
                                    </td>                                                             
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal com os dados da avaliação -->

    <div 
    x-show="selectedAvaliacao && selectedAvaliacao.requisicao" 
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
    @click.self="selectedAvaliacao = null"
    style="display: none;">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-2xl w-full max-w-3xl p-8 transform transition-all duration-300 ease-in-out scale-95 hover:scale-100">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-6 border-b pb-4">Detalhes da Avaliação</h2>

        <!-- Dados da Requisição -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Dados da Requisição</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-2">
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-300"><strong>ID:</strong> <span x-text="selectedAvaliacao.id"></span></p>
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-300"><strong>Requisição ID:</strong> <span x-text="selectedAvaliacao.requisicao_id"></span></p>
                </div>
                <div class="space-y-2">
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-300"><strong>Avaliado em:</strong> <span x-text="new Date(selectedAvaliacao.created_at).toLocaleDateString('pt-br')"></span></p>
                </div>
            </div>
        </div>

        <!-- Dados da Avaliação -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Dados da Avaliação</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-2">
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-300">
                        <strong>Rate Evento:</strong>
                        <span class="inline-flex">
                            <!-- Renderizando estrelas -->
                            <template x-for="i in 5" :key="i">
                                <svg 
                                    x-show="i <= selectedAvaliacao.rate_evento" 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    fill="currentColor" 
                                    viewBox="0 0 20 20" 
                                    class="w-5 h-5 text-yellow-400">
                                    <path d="M10 15l-3.293 2.707 1.267-4.943-3.844-3.157 4.973-.366L10 1l2.897 7.741 4.973.366-3.844 3.157 1.267 4.943L10 15z"/>
                                </svg>
                                <svg 
                                    x-show="i > selectedAvaliacao.rate_evento" 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    fill="none" 
                                    viewBox="0 0 20 20" 
                                    class="w-5 h-5 text-gray-300">
                                    <path fill="currentColor" d="M10 15l-3.293 2.707 1.267-4.943-3.844-3.157 4.973-.366L10 1l2.897 7.741 4.973.366-3.844 3.157 1.267 4.943L10 15z"/>
                                </svg>
                            </template>
                        </span>
                    </p>
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-300">
                        <strong>Rate Serviço:</strong> 
                        <span class="inline-flex">
                            <!-- Renderizando estrelas -->
                            <template x-for="i in 5" :key="i">
                                <svg 
                                    x-show="i <= selectedAvaliacao.rate_servico" 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    fill="currentColor" 
                                    viewBox="0 0 20 20" 
                                    class="w-5 h-5 text-yellow-400">
                                    <path d="M10 15l-3.293 2.707 1.267-4.943-3.844-3.157 4.973-.366L10 1l2.897 7.741 4.973.366-3.844 3.157 1.267 4.943L10 15z"/>
                                </svg>
                                <svg 
                                    x-show="i > selectedAvaliacao.rate_servico" 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    fill="none" 
                                    viewBox="0 0 20 20" 
                                    class="w-5 h-5 text-gray-300">
                                    <path fill="currentColor" d="M10 15l-3.293 2.707 1.267-4.943-3.844-3.157 4.973-.366L10 1l2.897 7.741 4.973.366-3.844 3.157 1.267 4.943L10 15z"/>
                                </svg>
                            </template>
                        </span>
                    </p>
                </div>
                <div class="space-y-2">
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-300">
                        <strong>Rate Cordialidade:</strong>
                        <span class="inline-flex">
                            <!-- Renderizando estrelas -->
                            <template x-for="i in 5" :key="i">
                                <svg 
                                    x-show="i <= selectedAvaliacao.rate_cordialidade" 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    fill="currentColor" 
                                    viewBox="0 0 20 20" 
                                    class="w-5 h-5 text-yellow-400">
                                    <path d="M10 15l-3.293 2.707 1.267-4.943-3.844-3.157 4.973-.366L10 1l2.897 7.741 4.973.366-3.844 3.157 1.267 4.943L10 15z"/>
                                </svg>
                                <svg 
                                    x-show="i > selectedAvaliacao.rate_cordialidade" 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    fill="none" 
                                    viewBox="0 0 20 20" 
                                    class="w-5 h-5 text-gray-300">
                                    <path fill="currentColor" d="M10 15l-3.293 2.707 1.267-4.943-3.844-3.157 4.973-.366L10 1l2.897 7.741 4.973.366-3.844 3.157 1.267 4.943L10 15z"/>
                                </svg>
                            </template>
                        </span> 
                    </p>
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-300">
                        <strong>Rate Geral:</strong>
                        <span class="inline-flex">
                            <!-- Renderizando estrelas -->
                            <template x-for="i in 5" :key="i">
                                <svg 
                                    x-show="i <= selectedAvaliacao.rate_geral" 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    fill="currentColor" 
                                    viewBox="0 0 20 20" 
                                    class="w-5 h-5 text-yellow-400">
                                    <path d="M10 15l-3.293 2.707 1.267-4.943-3.844-3.157 4.973-.366L10 1l2.897 7.741 4.973.366-3.844 3.157 1.267 4.943L10 15z"/>
                                </svg>
                                <svg 
                                    x-show="i > selectedAvaliacao.rate_geral" 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    fill="none" 
                                    viewBox="0 0 20 20" 
                                    class="w-5 h-5 text-gray-300">
                                    <path fill="currentColor" d="M10 15l-3.293 2.707 1.267-4.943-3.844-3.157 4.973-.366L10 1l2.897 7.741 4.973.366-3.844 3.157 1.267 4.943L10 15z"/>
                                </svg>
                            </template>
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Feedbacks -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Feedbacks</h3>
            <div class="space-y-2">
                <p class="text-sm font-medium text-gray-600 dark:text-gray-300"><strong>Elogios:</strong> <span x-text="selectedAvaliacao.elogios"></span></p>
                <p class="text-sm font-medium text-gray-600 dark:text-gray-300"><strong>Melhorias:</strong> <span x-text="selectedAvaliacao.melhorias"></span></p>
            </div>
        </div>

        <!-- Dados do Usuário -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Dados do Usuário</h3>
            <div class="space-y-2">
                <p class="text-sm font-medium text-gray-600 dark:text-gray-300"><strong>Nome do Usuário:</strong> <span x-text="selectedAvaliacao.nome_usuario || 'Não informado'"></span></p>
            </div>
        </div>

        <!-- Botão de Fechar -->
        <div class="flex justify-end">
            <button 
                @click="selectedAvaliacao = null"
                class="bg-red-500 hover:bg-red-400 px-6 py-3 text-white font-semibold rounded-lg shadow-md transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-red-400">
                Fechar
            </button>
        </div>
    </div>
</div>


</section>