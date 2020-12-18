<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class clienteController extends Controller
{

    public function __construct() {
        $this->middleware("auth")->only(["create"]);
    }

    public function index () {
        $clientesActivos = Cliente::activos()->get();
        $clientesInactivos = Cliente::inactivos()->get();

        $clientesMayores = Cliente::mayores()->get();
        $clientesMenores = Cliente::menores()->get();

        return view("clientes", compact("clientesActivos","clientesInactivos", "clientesMayores", "clientesMenores" ));
    }

    public function create () {
        dd("ESTAS EN EL CREATE");
    }
}
