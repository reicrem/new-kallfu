<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticulosController extends Controller
{
    public function index() {
    $articulos = DB::select('SELECT a.id, a.web, a.oferta, a.destaca, a.familia, a.marca, a.descripcion, a.origen, a.oem, a.tag, a.ean, a.imagen, a.estado, p.pventa as precio FROM articulos a LEFT JOIN precios p ON a.id = p.codart WHERE a.estado=1');
    return view('bodegas.articulos.list', ['articulos' => $articulos]);

  }

}
