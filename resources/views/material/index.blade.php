<x-layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Título e Botão de Criar Material -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-white">Lista de Materiais</h1>
            <a href="{{ route('material.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                Criar Material
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <!-- Cabeçalho da Tabela -->
                <thead>
                <tr class="bg-gray-100">
                    <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">ID</th>
                    <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Nome</th>
                    <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Série</th>
                    <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Patrimônio</th>
                    <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">Ações</th>
                </tr>
                </thead>

                <!-- Corpo da Tabela -->
                <tbody>
                @foreach ($materials as $material)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-900">{{ $material->id }}</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-900">{{ $material->name }}</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-900">{{ $material->serial_number }}</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-900">{{ $material->asset_number }}</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm">
                            <!-- Botão de Editar -->
                            <a href="{{ route('material.edit', ['material' => $material->id]) }}" class="text-blue-600 hover:text-blue-900 mr-2">Editar</a>

                            <!-- Formulário de Exclusão -->
                            <form action="{{ route('material.destroy', ['material' => $material->id]) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- Paginação -->
        <div class="mt-6">
            {{ $materials->links() }}
        </div>
    </div>
</x-layout>
