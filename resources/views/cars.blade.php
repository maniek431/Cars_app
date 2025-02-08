<!DOCTYPE html>
<html>
<head>
    <title>Dodaj Samochód</title>
</head>
<body>

<style>
    .opis {
        width: 300px;
        height: 200px;
        border: 1px solid #000;
        text-align: left;
        font-family: Arial, sans-serif; 
        font-size: 12px;
        font-weight: normal;
        margin: 0;
        padding: 8px; 
        overflow: auto;
        vertical-align: top;
        display: block;
    }
    .text_error {
        color: red;
        font-size: 15px;
    }
    .dodaj {
        background-color: rgb(68, 68, 68);
        border: 2px solid rgb(0, 0, 0);
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        margin: 2px 2px;
        cursor: pointer;
    }
</style>
<script>

    </script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodaj samochód:') }}
        </h2>
    </x-slot>
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <center><li><div class="text_error">{{ $error }}</div></li></center>
            @endforeach
        </ul>
    </div>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <div>
            <center><label for="Producent">Producent</label></center>
            <center><input type="text" id="Producent" name="Producent" value="{{ old('Producent') }}"></center>
        </div>
        <div>
            <center><label for="Model">Model</label></center>
            <center><input type="text" id="Model" name="Model" value="{{ old('Model') }}"></center>
        </div>
        <div>
            <center><label for="Kolor">Kolor</label></center>
            <center><input type="text" id="Kolor" name="Kolor" value="{{ old('Kolor') }}"></center>
        </div>
        <div>
            <center><label for="Rok_produkcji">Data produkcji:</label></center>
            <center><input type="date" id="Data_produkcji" name="Data_produkcji" value="{{ old('Data_produkcji') }}"></center>
        </div>
        <div>
            <center><label for="Przebieg">Przebieg:</label></center>
            <center><input type="text" id="Przebieg" name="Przebieg" value="{{ old('Przebieg') }}"></center>
        </div>
        <div>
            <center><label for="Pojemnosc_silnika">Pojemność silnika:</label></center>
            <center><input type="text" id="Pojemnosc_silnika" name="Pojemnosc_silnika" value="{{ old('Pojemnosc_silnika') }}"></center>
        </div>
        <div>
            <center><label for="VIN">VIN:</label></center>
            <center><input type="text" id="VIN" name="VIN" value="{{ old('VIN') }}"></center>
        </div>
        <div>
            <center><label for="Cena">Cena:</label></center>
            <center><input type="text" id="Cena" name="Cena" value="{{ old('Cena') }}"></center>
        </div>
        <div>
            <center><label for="Stan">Stan:</label></center>
            <center><select id="Stan" name="Stan">
                <option value="OK" {{ old('Stan') == 'OK' ? 'selected' : '' }}>OK</option>
                <option value="do naprawy" {{ old('Stan') == 'do naprawy' ? 'selected' : '' }}>do naprawy</option>
                <option value="naprawa" {{ old('Stan') == 'naprawa' ? 'selected' : '' }}>naprawa</option>
            </select></center>
        </div>
        <div>
            <center><label for="Opis_stanu">Opis stanu:</label></center>
            <center><input type="text" class="opis" id="Opis_stanu" name="Opis_stanu" value="{{ old('Opis_stanu') }}"></center>
        </div>
        <div>
            <center><label for="Typ">Typ:</label></center>
            <center><select id="Typ" name="Typ">
                <option value="osobowy" {{ old('Typ') == 'osobowy' ? 'selected' : '' }}>osobowy</option>
                <option value="dostawczy" {{ old('Typ') == 'dostawczy' ? 'selected' : '' }}>dostawczy</option>
                <option value="ciezarowy" {{ old('Typ') == 'ciezarowy' ? 'selected' : '' }}>ciezarowy</option>
            </select></center>
        </div>
        <div>
            <center><label for="Link_do_zdjec">Link do zdjęć:</label></center>
            <center><input type="url" id="Link_do_zdjec" name="Link_do_zdjec" value="{{ old('Link_do_zdjec') }}"></center>
        </div>
        <div>
            <center><label for="Data_utworzenia">Data utworzenia:</label></center>
            <center><input type="date" id="Data_utworzenia" name="Data_utworzenia" value="{{ old('Data_utworzenia') }}"></center>
        </div>
        <div>
            <center><label for="Termin">Termin:</label></center>
            <center><input type="date" id="Termin" name="Termin" value="{{ old('Termin') }}"></center>
        </div>
        <center><button type="submit" class="dodaj">Dodaj Samochód</button></center>
    </form>
    @if ($errors->any())
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>