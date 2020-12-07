<?php

namespace App\Http\Controllers;

use App\Models\Entity\Revista;
use Illuminate\Http\Request;

class RevistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revista = Revista::all(); //para listar as Revistas

        return response()->json($revista);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $revista = New Revista();

        $revista->fill($request->all());

        $revista->save();

        return response()->json($revista, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entity\Revista  $revista
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $revista = Revista::find($id);

        if(!$revista){
            return response()->json(['erro'=> 'Revista nao encontrada'], 404);
        }

        return response()->json($revista);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entity\Revista  $revista
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $revista = Revista::find($id);

        if(!$revista){
            return response()->json(['erro'=> 'Revista nao encontrada'], 404);

        }

        $revista->fill($request->all());

        $revista->update();

        return response()->json($revista, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entity\Revista  $revista
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $revista = Revista::find($id);

        if(!$revista){
            return response()->json(['erro'=> 'Revista nao encontrada'], 404);
        }
        $revista->delete();

        return response()->json(['sucesso'=> 'Revista excluida com sucesso'], 200);
    }
}
