<?php

namespace App\Http\Controllers;

use App\Models\Tributacao;
use Illuminate\Http\Request;

class TributacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tributacao = Tributacao::all();
        return view('tributacao.index', compact('tributacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tributacao = Tributacao::all();
        return view('tributacao.create', compact('tributacao'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tributacao = new tributacao();
        $tributacao->tipo = $request->input('tipo');
        $tributacao->valor = $request->input('valor');
        $tributacao->save();
        return redirect()->route('tributacao.index', compact('tributacao'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tributacao  $tributacao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tributacao = Tributacao::where('id', $id)->first();
        return view('tributacao.show', compact('tributacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tributacao  $tributacao
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tributacao = Tributacao::find($id);
        if (isset($tributacao)) {
            return view('tributacao.edit', compact('tributacao'));
        }
        return view('tributacao.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tributacao  $tributacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tributacao = Tributacao::find($id);
        if (isset($tributacao)) {
            $tributacao->tipo = $request->input('tipo');
            $tributacao->valor = $request->input('valor');

            $tributacao->save();
        }
        return redirect()->route('tributacao.index', compact('tributacao'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tributacao  $tributacao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tributacao = Tributacao::find($id);
        if (isset($tributacao)) {
            $tributacao->delete();
        }
        return redirect()->route('chapters.index', compact('chapter'));
    }
}
