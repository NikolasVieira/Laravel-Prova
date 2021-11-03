<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedor = Fornecedor::all();
        return view('fornecedor.index', compact('fornecedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fornecedor = Fornecedor::all();
        return view('fornecedor.create', compact('fornecedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $request->input('nome');
        $fornecedor->estado = $request->input('estado');
        $fornecedor->endereco = $request->input('endereco');
        $fornecedor->save();
        return redirect()->route('fornecedor.index', compact('fornecedor'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fornecedor = Fornecedor::where('id', $id)->first();
        return view('fornecedor.show', compact('fornecedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fornecedor = Fornecedor::find($id);
        if (isset($fornecedor)) {
            return view('fornecedor.edit', compact('fornecedor'));
        }
        return view('fornecedor.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fornecedor = Fornecedor::find($id);
        if (isset($fornecedor)) {
            $fornecedor->nome = $request->input('nome');
            $fornecedor->estado = $request->input('estado');
            $fornecedor->endereco = $request->input('endereco');
            $fornecedor->save();
        }
        return redirect()->route('fornecedor.index', compact('fornecedor'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedor = Fornecedor::find($id);
        if (isset($fornecedor)) {
            $fornecedor->delete();
        }
        return redirect()->route('chapters.index', compact('chapter'));
    }
}
