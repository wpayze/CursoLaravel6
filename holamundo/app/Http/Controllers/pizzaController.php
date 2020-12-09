<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class pizzaController extends Controller
{
    public function pizzas () {

        $pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy("precio", "DESC")->get();
        //$pizzas = Pizza:where("precio","<","250")->get();

        return view("pizzas.pizzas", [ "pizzas" => $pizzas ]);
    }
}
