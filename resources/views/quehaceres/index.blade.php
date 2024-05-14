<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quehaceres') }}
        </h2>
    </x-slot>

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

        .yellow {
            background-color: #FFC107;
        }

        .yellow:hover {
            background-color: #e0a800;
        }

        .red {
            background-color: #DC3545;
        }

        .red:hover {
            background-color: #c82333;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>

    <div class="py-12">
        <div class="container">
            <div class="mb-4">
                <button class="button blue">Crear Quehacer</button>
                <button class="button yellow">Vaciar Lista</button>
                <button class="button red">Eliminar Terminados</button>
            </div>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Descripción</th>
                            <th>Completado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quehaceres as $quehacer)
                            <tr>
                                <td>{{ $quehacer->descripcion }}</td>
                                <td>
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" {{ $quehacer->completado ? 'checked' : '' }}>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
