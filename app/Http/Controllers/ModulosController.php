<?php

namespace App\Http\Controllers;

use App\Models\Epsodios;
use Illuminate\Http\Request;
use App\Models\Modulos;
class ModulosController extends Controller
{

    public function update($id, Request $request)
    {
        $modulos = Modulos::find($id);
        $modulos->update($request->only('nome'));
        return response()->json($modulos);
    }
}
