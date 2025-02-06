<x-layout>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-16 w-auto" src="https://duquedecaxias.rj.gov.br/images/dc-logo.png" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-100">Entre com sua conta</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/login" method="POST">
                @csrf

                <div>
                    <div class="flex items-center justify-between">
                        <label for="email" class="block text-sm/6 font-medium text-gray-100">Email</label>
                        <div class="text-sm">
                            <a href="/register" class="font-semibold text-gray-100 hover:text-blue-200">Não tem conta? Registre-se aqui</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-400 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-100">Senha</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-gray-100 hover:text-blue-200">Esqueceu sua senha?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-400 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-gray-100 px-3 py-1.5 text-sm/6 font-semibold text-blue-600 shadow-xs hover:bg-gray-500 focus-visible:outline-2 hover:text-cyan-50 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Entrar</button>
                </div>
            </form>
        </div>
    </div>

</x-layout>
