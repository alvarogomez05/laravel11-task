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
                    <h1 class=" rounded p-2 text-center text-3xl text-yellow-500">Bienvenido al gestor de tareas</h1>
                    <!-- {{ __("You're logged in!") }} -->

                    <!-- {{Auth::user() -> tasks -> count()}} -->

                    <!-- forEach para todas las tareas de un usuario -->
                     @foreach (Auth::user() -> tasks as $task)

                    <p class="mt-4 text-lg text-yellow-500 rounded p-2 ">
                        {{ $task->title }}
                    </p>
                    <p>
                        {{ $task->description }}

                    </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
