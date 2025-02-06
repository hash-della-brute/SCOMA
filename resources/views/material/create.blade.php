<x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6 text-white">Criar Novo Material</h1>

        <!-- Formulário de Criação -->
        <form action="{{ route('material.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf <!-- Token CSRF para segurança -->

            <!-- Campo Nome -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" name="name" id="name" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            </div>

            <!-- Campo Descrição -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Descrição</label>
                <textarea name="description" id="description" rows="3"
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></textarea>
            </div>

            <!-- Campo Quantidade -->
            <div class="mb-4">
                <label for="quantity" class="block text-sm font-medium text-gray-700">Quantidade</label>
                <input type="number" name="quantity" id="quantity" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            </div>

            <!-- Campo Número de Série -->
            <div class="mb-4">
                <label for="serial_number" class="block text-sm font-medium text-gray-700">Número de Série</label>
                <input type="text" name="serial_number" id="serial_number" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            </div>

            <!-- Campo Número do Patrimônio -->
            <div class="mb-4">
                <label for="asset_number" class="block text-sm font-medium text-gray-700">Número do Patrimônio</label>
                <input type="text" name="asset_number" id="asset_number" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            </div>

            <!-- Botão de Envio -->
            <div class="flex justify-end">
                <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Salvar Material
                </button>
            </div>
        </form>
    </div>
</x-layout>
