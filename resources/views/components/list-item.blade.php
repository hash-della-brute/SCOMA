@props(['material'])

<li class="flex justify-between gap-x-6 py-5 border-b-2 hover:bg-gray-50 transition-colors duration-200">
    <!-- Clickable Area -->
    <a href="/materials/{{ $material->id }}/edit" class="flex justify-between items-center w-full">
        <div class="flex min-w-0 gap-x-4">
            <div class="min-w-0 flex-auto">
                <p class="text-sm/6 font-semibold text-gray-900">{{ $material->name }}</p>
                <p class="mt-1 truncate text-xs/5 text-gray-500">{{ $material->description }}</p>
            </div>
        </div>
        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
            <p class="text-sm/6 text-gray-900"><span class="font-bold">Quantidade: </span>{{ $material->stock }}</p>
        </div>
    </a>

    <!-- Edit and Delete Icons -->
    <div class="shrink-0 flex items-center gap-x-4">
        <!-- Edit Icon -->
        <a href="/materials/{{ $material->id }}/edit" class="text-gray-400 hover:text-blue-500 transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
            </svg>
        </a>

        <!-- Delete Icon -->
        <form action="/materials/{{ $material->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this material?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-gray-400 hover:text-red-500 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </button>
        </form>
    </div>
</li>
