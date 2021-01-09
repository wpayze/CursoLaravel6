<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Barryvdh\Debugbar\Facade as Debugbar;
use Exception;
use Illuminate\Support\Facades\Session;

class ProductoController extends Controller
{
    public function index() {
        // $this->authorize("viewAny", Producto::class);
        // $productos = Producto::paginate(10);

        $paginacion = request()->get("paginacion") ? request()->get("paginacion") : 10;

        $filters = request()->get("filter");
        if (request()->get("estado") == "active") {
            $filters["activo"] = "true";
            request()->merge([
                "filter" => $filters
            ]);
        }

        if (request()->get("estado") == "inactive") {
            $filters["inactivo"] = "true";
            request()->merge([
                "filter" => $filters
            ]);
        }

        $productos = QueryBuilder::for(Producto::class)
                        ->allowedFilters([
                            'nombre',
                            'categoria',
                            'precio',
                            AllowedFilter::exact('id'),
                            AllowedFilter::scope('activo'),
                            AllowedFilter::scope('inactivo')
                        ])
                        ->paginate( $paginacion )
                        ->appends( request()->query() );

        $query = trim(request()->get("search"));

        if ($query) {
            $productos = Producto::where("nombre", "LIKE", "%" . $query . "%")
            ->orWhere("precio", "LIKE", "%" . $query . "%")
            ->orWhere("categoria", "LIKE", "%" . $query . "%")
            ->paginate($paginacion)
            ->appends( request()->query() );
        }

        // Session::put('productos', $productos);
        // Session::put('nombre', "wil");

        // Debugbar::info($object);
        // Debugbar::error('Error!');
        // Debugbar::warning('Watch out…');
        // Debugbar::addMessage('Another message', 'mylabel');
        // try {
        //     throw new Exception("ESTO NO SIRVE.");
        // } catch (Exceptionn $e) {
        //     Debugbar::addThrowable($e);
        // }


        //$productos = Producto::inactivo()->get();

        return view("producto.index", compact('productos'));
    }

    public function show($id) {
        $producto = Producto::find($id);
        $nom = Session::get('nombre');

        $this->authorize("view", $producto);

        return view("producto.show", compact('producto', 'nom'));
    }

    public function create() {

        $this->authorize("create", Producto::class);

        return view("producto.create");
    }

    function store(Request $request) {

        $this->authorize("create", Producto::class);

        $data = $request->validate([
            "nombre" => "required",
            "precio" => "required",
            "categoria" => "required"
        ]);

        Producto::create($data);
        return redirect("/productos");
    }

    public function delete ($id) {
        $producto = Producto::find($id);

        $this->authorize("delete", $producto);

        $producto->delete();
        return redirect("/productos");
    }
}
