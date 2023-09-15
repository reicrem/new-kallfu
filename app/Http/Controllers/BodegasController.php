<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BodegasController extends Controller
{

  public function index() {
    $bodega = DB::select('SELECT * FROM bodega');
    return view('bodegas.bodegas.list', ['bodega' => $bodega]);
  }

  public function ver_bodega($id) {
    $bodega = DB::select('SELECT * FROM bodega WHERE id='.$id);
    //retornar la vista al edit
    return view('bodegas.bodegas.edit', ['bodega' => $bodega]);
  }

  public function mod_bodega(Request $request) {
    try {
        $bodega = DB::update('UPDATE bodega SET bodega=?, estado=? WHERE id=?', [
            $request->bodega,
            $request->estado,
            $request->id,
        ]);
        $bodega = DB::select('SELECT * FROM bodega');
    return view('bodegas.bodegas.list', ['bodega' => $bodega]);
    } catch (\Throwable $th){
        return back()->with("Error", " Error al guardar los datos");
    }
  }

}
