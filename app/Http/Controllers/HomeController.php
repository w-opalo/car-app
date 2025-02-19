<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FuelType;
use App\Models\Maker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        $car = Car::find(1);
        // dd($car);
        return view('home.index');
    }
}
