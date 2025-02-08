<!DOCTYPE html>
<html>
<head>
    <title>Aktualizuj Samochód</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-container div {
            margin-bottom: 15px;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-container input[type="text"],
        .form-container input[type="date"],
        .form-container input[type="url"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-container button {
            background-color:rgb(0, 0, 0);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color:rgb(0, 0, 0);
        }
        @media (max-width: 600px) {
            .form-container {
                padding: 10px;
            }
            .form-container label,
            .form-container input,
            .form-container button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aktualizuj Samochód') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="form-container">
    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div>
            <center><label for="Producent">Producent:</label></center>
            <center><input type="text" id="Producent" name="Producent" value="{{ old('Producent', $car->Producent) }}"></center>
        </div>
        <div>
            <center><label for="Model">Model:</label></center>
            <center><input type="text" id="Model" name="Model" value="{{ old('Model', $car->Model) }}"></center>
        </div>
        <div>
            <center><label for="Kolor">Kolor:</label></center>
            <center><input type="text" id="Kolor" name="Kolor" value="{{ old('Kolor', $car->Kolor) }}"></center>
        </div>
        <div>
            <center><label for="Data_produkcji">Data produkcji:</label></center>
            <center><input type="date" id="Data_produkcji" name="Data_produkcji" value="{{ old('Data_produkcji', $car->Rok_produkcji) }}"></center>
        </div>
        <div>
            <center><label for="Przebieg">Przebieg:</label></center>
            <center><input type="text" id="Przebieg" name="Przebieg" value="{{ old('Przebieg', $car->Przebieg) }}"></center>
        </div>
        <div>
            <center><label for="Pojemnosc_silnika">Pojemność silnika:</label></center>
            <center><input type="text" id="Pojemnosc_silnika" name="Pojemnosc_silnika" value="{{ old('Pojemnosc_silnika', $car->Pojemnosc_silnika) }}"></center>
        </div>
        <div>
            <center><label for="VIN">VIN:</label></center>
            <center><input type="text" id="VIN" name="VIN" value="{{ old('VIN', $car->VIN) }}"></center>
        </div>
        <div>
            <center><label for="Cena">Cena:</label></center>
            <center><input type="text" id="Cena" name="Cena" value="{{ old('Cena', $car->Cena) }}"></center>
        </div>
        <div>
            <center><label for="Stan">Stan:</label></center>
            <center><input type="text" id="Stan" name="Stan" value="{{ old('Stan', $car->Stan) }}"></center>
        </div>
        <div>
            <center><label for="Opis_stanu">Opis stanu:</label></center>
            <center><input type="text" id="Opis_stanu" name="Opis_stanu" value="{{ old('Opis_stanu', $car->Opis_stanu) }}"></center>
        </div>
        <div>
            <center><label for="Typ">Typ:</label></center>
            <center><input type="text" id="Typ" name="Typ" value="{{ old('Typ', $car->Typ) }}"></center>
        </div>
        <div>
            <center><label for="Link_do_zdjec">Link do zdjęć:</label></center>
            <center><input type="url" id="Link_do_zdjec" name="Link_do_zdjec" value="{{ old('Link_do_zdjec', $car->Link_do_zdjec) }}"></center>
        </div>
        <div>
            <center><label for="Data_utworzenia">Data utworzenia:</label></center>
            <center><input type="date" id="Data_utworzenia" name="Data_utworzenia" value="{{ old('Data_utworzenia', $car->Data_utworzenia) }}"></center>
        </div>
        <div>
            <center><label for="Termin">Termin:</label></center>
            <center><input type="date" id="Termin" name="Termin" value="{{ old('Termin', $car->Termin) }}"></center>
        </div>
        <center><button type="submit">Aktualizuj Samochód</button></center>
    </form>
</div>
</x-app-layout>

</body>
</html>