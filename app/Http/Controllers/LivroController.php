<?php

namespace App\Http\Controllers;

use App\Models\Entity\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livro = Livro::all(); //para listar os Livros

        return response()->json($livro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $livro = New Livro();

        $livro->fill($request->all());

        $livro->save();

        return response()->json($livro, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entity\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = Livro::find($id);

        if(!$livro){
            return response()->json(['erro'=> 'Livro nao encontrado'], 404);
        }

        return response()->json($livro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entity\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $livro = Livro::find($id);

        if(!$livro){
            return response()->json(['erro'=> 'Livro nao encontrado'], 404);

        }

        $livro->fill($request->all());

        $livro->update();

        return response()->json($livro, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entity\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = Livro::find($id);

        if(!$livro){
            return response()->json(['erro'=> 'Livro nao encontrado'], 404);
        }
        $livro->delete();

        return response()->json(['sucesso'=> 'Livro excluido com sucesso'], 200);
    }
}
