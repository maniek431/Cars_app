<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Car;

class CarsController extends Controller
{
    public function create()
    {
        return view('cars');
    }

    public function store(Request $request)
    {
    $request -> validate ([
        'Producent' => 'required|string|max:255',
        'Model' => 'required|string|max:255',
        'Kolor' => 'string|max:255',
        'Data_produkcji' => 'required|date',
        'Przebieg' => 'required|string|max:255',
        'Pojemnosc_silnika' => 'required|string|max:255|regex:/^[0-9]+$/',
        'VIN' => 'required|string|max:17|unique:cars|regex:/^[A-Z0-9]+$/',
        'Cena' => 'required|string|max:255|regex:/^[0-9]+$/',
        'Stan' => 'required|string|max:255|in:OK,do naprawy, naprawa',
        'Opis_stanu' => 'required|string|max:255',
        'Typ' => 'required|string|max:255|in:osobowy, dostawczy, ciezarowy',
        'Link_do_zdjec' => 'required|string|max:255',
        'Data_utworzenia' => 'required|date',
        'Termin' => 'required|date',
    ]);
    $data_utworzenia = Carbon::parse($request->Data_utworzenia);
    $termin = Carbon::parse($request->Termin);
    $pozostalo =$data_utworzenia->diffInDays($termin);


    Car::create([
        'Producent' => $request->Producent,
        'Model' => $request->Model,
        'Kolor' => $request->Kolor,
        'Data_produkcji' => $request->Data_produkcji,
        'Przebieg' => $request->Przebieg,
        'Pojemnosc_silnika' => $request->Pojemnosc_silnika,
        'VIN' => $request->VIN,
        'Cena' => $request->Cena,
        'Stan' => $request->Stan,
        'Opis_stanu' => $request->Opis_stanu,
        'Typ' => $request->Typ,
        'Link_do_zdjec' => $request->Link_do_zdjec,
        'Data_utworzenia' => $request->Data_utworzenia,
        'Termin' => $request->Termin,
        'Pozostalo' => $pozostalo,
    ]);

    return redirect()->route('cars.create')->with('status', 'Car created!');
    }
}
