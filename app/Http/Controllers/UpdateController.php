<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class UpdateController extends Controller
{
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('update', ['car' => $car]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Producent' => 'required|string|max:255',
            'Model' => 'required|string|max:255',
            'Kolor' => 'string|max:255',
            'Data_produkcji' => 'required|date',
            'Przebieg' => 'required|string|max:255',
            'Pojemnosc_silnika' => 'required|string|max:255|regex:/^[0-9]+$/',
            'VIN' => 'required|string|max:17|regex:/^[A-Z0-9]+$/',
            'Cena' => 'required|string|max:255|regex:/^[0-9]+$/',
            'Stan' => 'required|string|max:255|in:OK,do naprawy,naprawa',
            'Opis_stanu' => 'required|string|max:255',
            'Typ' => 'required|string|max:255|in:osobowy,dostawczy,ciezarowy',
            'Link_do_zdjec' => 'required|url|max:255',
            'Data_utworzenia' => 'required|date',
            'Termin' => 'required|date',
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());

        return redirect()->route('cars.index')->with('success', 'Samochód został zaktualizowany.');
    }
}