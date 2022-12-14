<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

//Test Controller

class CarController extends Controller
{
    public function create()
    {
        return view('carcreate');
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->carcompany = $request->get('carcompany');
        $car->model = $request->get('model');
        $car->price = $request->get('price');
        $car->save();
        return redirect('car')->with('success', 'Car has been successfully added');
    }

    public function show($slug)
    {
        return view('post', [
            'post' => Car::where('slug', '=', $slug)->first()
        ]);
    }
}
