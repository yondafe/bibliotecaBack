<?php

namespace App\Http\Controllers;

use App\Models\Entity\Jornal;
use Illuminate\Http\Request;

class JornalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jornal = Jornal::all(); //para listar os jornais

        return response()->json($jornal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $jornal = New Jornal();

        $jornal->fill($request->all());

        $jornal->save();

        return response()->json($jornal, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entity\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jornal = Jornal::find($id);

        if(!$jornal){
            return response()->json(['erro'=> 'Jornal nao encontrado'], 404);
        }

        return response()->json($jornal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entity\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $jornal = Jornal::find($id);

        if(!$jornal){
            return response()->json(['erro'=> 'Jornal nao encontrado'], 404);

        }

        $jornal->fill($request->all());

        $jornal->update();

        return response()->json($jornal, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entity\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jornal = Jornal::find($id);

        if(!$jornal){
            return response()->json(['erro'=> 'Jornal nao encontrado'], 404);
        }
        $jornal->delete();

        return response()->json(['sucesso'=> 'Jornal excluido com sucesso'], 200);
    }
}
