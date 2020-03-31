<?php


namespace App\Http\Controllers;


use App\Http\Requests\SeriesFormRequest;
use App\Serie;
use Illuminate\Http\Request;


class SeriesController extends Controller {
    public function index(Request $request) {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create() {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request) {

        $serie = Serie::create($request->all());
        $mensagem = $request->session()->flash('mensagem' , "Série com id: {$serie->id} incluída com sucesso: {$serie->nome}");
        return redirect()->route('listar_series');
    }

    public function destroy(Request $request) {
        Serie::destroy($request->id);
        $mensagem = $request->session()->flash('mensagem' , "Série removida com sucesso.");
        return redirect('/series');
    }

}
