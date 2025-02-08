<!DOCTYPE html>
<html>
<head>
    <title>Lista Samochodów</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #ddd;
        }
        .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .actions form {
            display: inline;
        }
        .negative {
            color: red;
        }
    </style>
</head>
<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista Samochodów') }}
        </h2>
    </x-slot>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div>
            {{ session('error') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Producent</th>
                <th>Model</th>
                <th>Kolor</th>
                <th>Data produkcji</th>
                <th>Przebieg</th>
                <th>Pojemność silnika</th>
                <th>VIN</th>
                <th>Cena</th>
                <th>Stan</th>
                <th>Opis stanu</th>
                <th>Typ</th>
                <th>Link do zdjęć</th>
                <th>Data utworzenia</th>
                <th>Termin</th>
                <th>Pozostało dni</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->Producent }}</td>
                    <td>{{ $car->Model }}</td>
                    <td>{{ $car->Kolor }}</td>
                    <td>{{ $car->Data_produkcji }}</td>
                    <td>{{ $car->Przebieg }}</td>
                    <td>{{ $car->Pojemnosc_silnika }}</td>
                    <td>{{ $car->VIN }}</td>
                    <td>{{ $car->Cena }}</td>
                    <td>{{ $car->Stan }}</td>
                    <td>{{ $car->Opis_stanu }}</td>
                    <td>{{ $car->Typ }}</td>
                    <td><a href="{{ $car->Link_do_zdjec }}">{{ $car->Link_do_zdjec }}</a></td>
                    <td>{{ $car->Data_utworzenia }}</td>
                    <td>{{ $car->Termin }}</td>
                    <td class="{{ $car->Pozostalo < 0 ? 'negative' : '' }}">{{ $car->Pozostalo }}</td>
                    <td class="actions">
                        <a href="{{ route('cars.edit', $car->id) }}">Edytuj</a>
                        <form action="{{ route('cars.delete', $car->VIN) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Usuń</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>

</body>
</html>