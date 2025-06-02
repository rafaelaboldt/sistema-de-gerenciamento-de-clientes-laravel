<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>
                </div>
            </div>

            <div class="overflow-hidden mt-4 grid grid-cols-2 gap-4">

                <div class="bg-white shadow-sm sm:rounded-lg p-6 text-gray-900">
                    <p>Clientes cadastrados: {{ count($clientes) }}</strong></p><hr>
                    <p class="mt-4"><a href="{{ route('meus.clientes', Auth::user()->id) }}" class="bg-blue-500 text-white rounded p-2">Ver Clientes</a></p>
                </div>

                <div class="bg-white shadow-sm sm:rounded-lg p-6 text-gray-900">
                    <p>Usuários cadastrados: {{ count($users) }}</strong></p><hr>
                    <p class="mt-4"><a href="{{ route('user.index', Auth::user()->id) }}" class="bg-blue-500 text-white rounded p-2">Ver Usuários</a></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
