<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Nuevo Quehacer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <form action="{{ route('quehaceres.store') }}" method="POST">
                @csrf <!-- CSRF token -->

                <div class="mb-4">
                    <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">
                        Descripción:
                    </label>
                    <input type="text" id="descripcion" name="descripcion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <input type="hidden" name="completado" value="0"> <!-- Completado is fals default -->
               

                <div class="mb-4">
                    <button
               
                    type="submit" class="button blue">Guardar Quehacer</button>
                    <a href="{{ route('quehaceres.index') }}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancelar</a>
                </div>

            </form>
        </div>
    </div>

    <style>
        .button {
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .blue {
            background-color: #007BFF;
        }

        .blue:hover {
            background-color: #0056b3;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input[type="text"] {
            box-sizing: border-box;
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        label {
            display: block;
            margin-bottom: .5rem;
            font-size: 1rem;
        }
    </style>
</x-app-layout>

