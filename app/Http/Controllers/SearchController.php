<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Formando;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function makeSearchForm(Request $request)
    {
        $cursos = Curso::all();

        return view('search_form', ['cursos' => $cursos]);
    }

    public function doSearch(Request $request)
    {
        $request->validate([
            'nome' => 'present|max:100',
            'ano' => 'present',
            'curso' => 'present',
        ], [
            'nome.max' => 'O campo nome deve ter no máximo 100 caracteres',
        ]);


        $searchResults = Formando::where( function ($query)  use ($request){
                if ($request->nome <> '') {
                    $query->where('nome', 'like', '%'. $request->nome . '%');
                }
                if (is_numeric($request->ano)) {
                    $query->where('ano', $request->ano);
                }
                if (is_numeric($request->curso)) {
                    $query->where('curso', $request->curso);
                }
                return $query;})
            ->simplePaginate(3);

        return view('search_results', compact('searchResults'));
    }
}
