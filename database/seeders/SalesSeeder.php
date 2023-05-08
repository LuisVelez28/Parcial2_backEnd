<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\sales;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sales = new Sales();
        $sales->nombre_vendedor = "Juan";
        $sales->nombre_cliente = "Pedro";
        $sales->nombre_producto = "Coca Cola";
        $sales->precio = 10;
        $sales->fecha_compra = 20210507;
        $sales->save();
    }
}
