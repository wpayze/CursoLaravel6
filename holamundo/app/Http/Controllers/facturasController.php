<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class facturasController extends Controller
{
    public function home () {
        return view("facturas.index");
    }

    public function acerca() {
        return view("facturas.about");
    }

    public function facturas() {

        $bd = [
            [
                "id" => "1",
                "correlativo" => "00001",
                "total" => "1000"
            ],
            [
                "id" => "2",
                "correlativo" => "00002",
                "total" => "2000"
            ],
            [
                "id" => "3",
                "correlativo" => "00003",
                "total" => "3000"
            ]
        ];

        return view("facturas.facturas", [ "facturas" => $bd ]);
    }
}
