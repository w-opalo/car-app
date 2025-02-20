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
        $maker = Maker::factory()->count(5)->create(['name' => 'hellen']);
        dd($maker);
        return view('home.index');
    }
}
