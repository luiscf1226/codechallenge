<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quehaceres') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="mb-4 button-container">
                <a href="{{route('quehaceres.create')}}" class="button blue">Crear Quehacer</a>
                <form action="{{ route('quehaceres.delete-all') }}" method="POST" onsubmit="return confirm('¿Está seguro de que desea vaciar la lista de quehaceres?');">
                    @csrf
                    <button type="submit" class="button yellow">Vaciar Lista</button>
                </form>
                <form action="{{ route('quehaceres.delete-completed') }}" method="POST" onsubmit="return confirm('¿Está seguro de que desea eliminar todos los quehaceres completados?');">
                    @csrf
                    <button type="submit" class="button red">Eliminar Terminados</button>
                </form>

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
                                <form action="{{ route('quehaceres.complete', $quehacer->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" {{ $quehacer->completado ? 'checked' : '' }} onchange="this.form.submit()">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--- Se utilizo styles de css en duro debido a problemas en tailwind en los tres botones  --->
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

        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .button-container form {
            margin: 0;
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
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

</x-app-layout>