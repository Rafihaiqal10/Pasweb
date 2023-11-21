<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function showCar(){
        return view('car.all',[
            'title' => 'Halaman All mobil',
            'car' => Car::All()
        ]);
    }
}
