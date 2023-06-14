<?php

namespace App\Http\Controllers;

use App\Models\Epsodios;
use Illuminate\Http\Request;

class ModulosController extends Controller
{

    public function update($id, Request $request)
    {
        dd($request->all());
    }
}
