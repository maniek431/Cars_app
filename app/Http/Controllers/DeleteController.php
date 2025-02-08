<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Carbon\Carbon;

class DeleteController extends Controller
{
    public function deleteCar($identifier)
    {
        
        if (is_numeric($identifier)) {
            $car = Car::find($identifier);
        } else {
            $car = Car::where('VIN', $identifier)->first();
        }

        if ($car) {
            $car->delete();
            return redirect()->route('cars.index')->with('success', 'Samochód został usunięty.');
        } else {
            return redirect()->route('cars.index')->with('error', 'Samochód nie został znaleziony.');
        }
    }
}