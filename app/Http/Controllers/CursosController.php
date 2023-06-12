<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Cursos::with('areasRelacionamento')->orderBy('nome', 'asc')->get();
        $areas = Areas::orderBy('nome', 'asc')->get();
        return view('cursos.index', compact('cursos', 'areas'));
    }
    public function pesquisa(Request $request)
    {
        $cursos = Cursos::where('nome', 'like', '%'. $request->pesquisa .'%')->get();

        return view('componentes.cursos', compact('cursos', ));
    }
    /**
     * Show the form for creating a new resource.
     */

    function filtros(Request $request)
    {
        $area = $request->area;
        if($area == 3){
            $cursos = Cursos::with('areasRelacionamento')->orderBy('nome', 'asc')->get();
            return view('componentes.cursos', compact('cursos', ));
        }else {

            $cursos = Cursos::where('areas_id', $request->all())->get();
            return view('componentes.cursos', compact('cursos'));
        }
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
