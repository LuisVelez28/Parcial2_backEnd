<?php

namespace App\Http\Controllers;

use App\Models\sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = sales::all();
        return $sales;   
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $sales = new sales();
        $sales->nombre_vendedor = $request->nombre_vendedor;
        $sales->nombre_cliente = $request->nombre_cliente;
        $sales->nombre_producto = $request->nombre_producto;
        $sales->precio = $request->precio;
        $sales->fecha_compra = $request->fecha_compra;
        $sales->save();
        return $sales;
    }

    public function show(sales $sales)
    {
        
    }

    public function edit(sales $sales)
    {
        
    }

    public function update(Request $request, sales $sales)
    {
        $sales = sales::find($sales->id);
        $sales->nombre_vendedor = $request->nombre_vendedor;
        $sales->nombre_cliente = $request->nombre_cliente;
        $sales->nombre_producto = $request->nombre_producto;
        $sales->precio = $request->precio;
        $sales->fecha_compra = $request->fecha_compra;
        $sales->save();
        return $sales;
    }

    public function destroy($id)
    {
        $sales = sales::find($id);
        $sales->delete();
        return $sales;
    }

}