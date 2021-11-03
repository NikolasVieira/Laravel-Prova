<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = Produto::all();
        return view('produto.index', compact('produto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produto = Produto::all();
        return view('produto.create', compact('produto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new produto();
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');
        $produto->tributacao_id = $request->input('tributacao_id');
        $produto->fornecedor_id = $request->input('fornecedor_id');
        $produto->save();
        return redirect()->route('produto.index', compact('produto'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::where('id', $id)->first();
        return view('produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        if (isset($produto)) {
            return view('produto.edit', compact('produto'));
        }
        return view('produto.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        if (isset($produto)) {
            $produto->descricao = $request->input('descricao');
            $produto->preco = $request->input('preco');
            $produto->tributacao_id = $request->input('tributacao_id');
            $produto->fornecedor_id = $request->input('fornecedor_id');
            $produto->save();
        }
        return redirect()->route('produto.index', compact('produto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        if (isset($produto)) {
            $produto->delete();
        }
        return redirect()->route('chapters.index', compact('chapter'));
    }
}
