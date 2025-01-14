<div class="max-w-4xl mx-auto relative p-6 bg-gray-200 rounded-lg shadow-lg mt-10">
    <h2 class="text-3xl font-semibold text-center text-gray-80 mb-8">Avaliação do Evento</h2>
    
    <form action="{{ route('enviar.avaliacao') }}" method="POST">
        @csrf

        <!-- Dados da requisição -->
        <input type="hidden" name="requisicao[numano]" value="{{ $requisicao['numano'] }}">
        <input type="hidden" name="requisicao[situacao]" value="{{ $requisicao['situacao'] }}">
        <input type="hidden" name="requisicao[data-entrega]" value="{{ $requisicao['dtEntrega'] }}">
        <input type="hidden" name="requisicao[numano-tipo]" value="{{ $requisicao['numano_tipo'] }}">

        <!-- Pergunta 1 -->
        <div class="mb-6">
            <label for="eventoDia" class="block text-lg font-medium text-gray-700 mb-2">1. Qual o dia do evento?</label>
            <input type="date" id="eventoDia" name="eventoDia" class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        
        <!-- Pergunta 2 - Sistema de Estrelas de 1 a 5 -->
        <div class="mb-6">
            <label for="satisfacao" class="block text-lg font-medium text-gray-700 mb-2">2. Como você avalia sua satisfação geral com o evento?</label>
            <fieldset class="space-y-4">
                <div class="relative flex flex-row-reverse space-x-1 justify-center">
                    <!-- Estrela 5 -->
                    <input value="5" name="rate-evento" id="start-evento-5" type="radio" class="peer hidden" />
                    <label for="start-evento-5" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 4 -->
                    <input value="4" name="rate-evento" id="start-evento-4" type="radio" class="peer hidden" />
                    <label for="start-evento-4" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 3 -->
                    <input value="3" name="rate-evento" id="start-evento-3" type="radio" class="peer hidden" />
                    <label for="start-evento-3" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 2 -->
                    <input value="2" name="rate-evento" id="start-evento-2" type="radio" class="peer hidden" />
                    <label for="start-evento-2" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 1 -->
                    <input value="1" name="rate-evento" id="start-evento-1" type="radio" class="peer hidden" />
                    <label for="start-evento-1" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                </div>
            </fieldset>            
        </div>

        <!-- Pergunta 3 -->
        <div class="mb-6">
            <label for="pontualidade" class="block text-lg font-medium text-gray-700 mb-2">3. Como você avalia a pontualidade da entrega dos serviços contratados?</label>
            <fieldset class="space-y-4">
                <div class="relative flex flex-row-reverse space-x-1 justify-center">
                    <!-- Estrela 5 -->
                    <input value="5" name="rate-servico" id="star-servico-5" type="radio" class="peer hidden" />
                    <label for="star-servico-5" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 4 -->
                    <input value="4" name="rate-servico" id="star-servico-4" type="radio" class="peer hidden" />
                    <label for="star-servico-4" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 3 -->
                    <input value="3" name="rate-servico" id="star-servico-3" type="radio" class="peer hidden" />
                    <label for="star-servico-3" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 2 -->
                    <input value="2" name="rate-servico" id="star-servico-2" type="radio" class="peer hidden" />
                    <label for="star-servico-2" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 1 -->
                    <input value="1" name="rate-servico" id="star-servico-1" type="radio" class="peer hidden" />
                    <label for="star-servico-1" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                </div>
            </fieldset>
        </div>

        <!-- Pergunta 4 -->
        <div class="mb-6">
            <label for="cordialidade" class="block text-lg font-medium text-gray-700 mb-2">4. Cordialidade e atendimento dos profissionais envolvidos no evento</label>
            <fieldset class="space-y-4">
                <div class="relative flex flex-row-reverse space-x-1 justify-center">
                    <!-- Estrela 5 -->
                    <input value="5" name="rate-cordialidade" id="star-cordialidade-5" type="radio" class="peer hidden" />
                    <label for="star-cordialidade-5" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 4 -->
                    <input value="4" name="rate-cordialidade" id="star-cordialidade-4" type="radio" class="peer hidden" />
                    <label for="star-cordialidade-4" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 3 -->
                    <input value="3" name="rate-cordialidade" id="star-cordialidade-3" type="radio" class="peer hidden" />
                    <label for="star-cordialidade-3" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 2 -->
                    <input value="2" name="rate-cordialidade" id="star-cordialidade-2" type="radio" class="peer hidden" />
                    <label for="star-cordialidade-2" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 1 -->
                    <input value="1" name="rate-cordialidade" id="star-cordialidade-1" type="radio" class="peer hidden" />
                    <label for="star-cordialidade-1" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                </div>
            </fieldset>
        </div>

        <!-- Pergunta 5 -->
        <div class="mb-6">
            <label for="avaliacaoGeral" class="block text-lg font-medium text-gray-700 mb-2">5. No contexto geral, como você avalia os serviços prestados?</label>
            <fieldset class="space-y-4">
                <div class="relative flex flex-row-reverse space-x-1 justify-center">
                    <!-- Estrela 5 -->
                    <input value="5" name="rate-geral" id="star-geral-5" type="radio" class="peer hidden" />
                    <label for="star-geral-5" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 4 -->
                    <input value="4" name="rate-geral" id="star-geral-4" type="radio" class="peer hidden" />
                    <label for="star-geral-4" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 3 -->
                    <input value="3" name="rate-geral" id="star-geral-3" type="radio" class="peer hidden" />
                    <label for="star-geral-3" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 2 -->
                    <input value="2" name="rate-geral" id="star-geral-2" type="radio" class="peer hidden" />
                    <label for="star-geral-2" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                    
                    <!-- Estrela 1 -->
                    <input value="1" name="rate-geral" id="star-geral-1" type="radio" class="peer hidden" />
                    <label for="star-geral-1" class="cursor-pointer text-gray-400 text-4xl peer-checked:text-yellow-400 peer-checked:hover:text-yellow-500 hover:text-yellow-300">★</label>
                </div>
            </fieldset>
        </div>

        <!-- Pergunta 6 - Opção "Outro" para texto -->
        <div class="mb-6">
            <label for="elogiosSugestoes" class="block text-lg font-medium text-gray-700 mb-2">6. Descreva elogios ou sugestões</label>
            <textarea id="elogiosSugestoes" name="elogiosSugestoes" rows="4" class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <div class="flex justify-center">
            <button type="submit" class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-500 transition duration-200">Enviar Avaliação</button>
        </div>
    </form>
</div>


