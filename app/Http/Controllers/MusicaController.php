<?php

namespace App\Http\Controllers;

use App\Models\Entity\Musica;
use Illuminate\Http\Request;

class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musica = Musica::all(); //para listar as musicas

        return response()->json($musica);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $musica = New Musica();

        $musica->fill($request->all());

        $musica->save();

        return response()->json($musica, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entity\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $musica = Musica::find($id);

        if(!$musica){
            return response()->json(['erro'=> 'Musica nao encontrada'], 404);
        }

        return response()->json($musica);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entity\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $musica = Musica::find($id);

        if(!$musica){
            return response()->json(['erro'=> 'Musica nao encontrada'], 404);

        }

        $musica->fill($request->all());

        $musica->update();

        return response()->json($musica, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entity\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $musica = Musica::find($id);

        if(!$musica){
            return response()->json(['erro'=> 'Musica nao encontrada'], 404);
        }
        $musica->delete();

        return response()->json(['sucesso'=> 'Musica excluida com sucesso'], 200);
    }
}
