<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Cursos;
use App\Models\Modulos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $cursos = Cursos::create([
            'areas_id' => $request->areas_id,
            'nome' => $request->name,
            'aprendizado' => $request->aprendizado,
            'desc' => $request->name,
            'ativo' => 1,
            'is_framework' => $request->linguagem
        ]);
        return Cursos::with('areasRelacionamento')->where('id', $cursos->id)->first();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $curso = Cursos::find($id);
        $cursoCountEp = Cursos::withCount('epsodiosRelacionamento')->where('id', $id)->first();
        $somaTempoEpsodios = DB::table('episodios')
        ->where('cursos_id', $curso->id)
        ->pluck('tempo');
        $modulos = Modulos::with('epsodiosRelacionamento', 'cursoRelacionamento')->where('cursos_id', $curso->id)->get();
        $horas = [];
        foreach($somaTempoEpsodios as $tempo){
            list($hora, $minuto, $segundo) = explode(':', $tempo);
            array_push($horas, $hora);
        }
        $horaTotal = 0;
        foreach($horas as $teste){
            $horaTotal = $horaTotal + $teste;
        }

        return view('cursos.show', compact('curso', 'cursoCountEp', 'horaTotal', 'modulos'));
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
