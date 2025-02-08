<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Carbon\Carbon;
 use App\Models\Car;

 class ViewCarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

}