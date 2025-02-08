<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $fillable = [
        'Producent',
        'Model',
        'Kolor',
        'Data_produkcji',
        'Przebieg',
        'Pojemnosc_silnika',
        'VIN',
        'Cena',
        'Stan',
        'Opis_stanu',
        'Typ',
        'Link_do_zdjec',
        'Data_utworzenia',
        'Termin',
        'Pozostalo',
    ];
}