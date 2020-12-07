<?php

namespace App\Http\Controllers;

use App\Models\Entity\Notebook;
use Illuminate\Http\Request;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notebook = Notebook::all(); //para listar os notebooks

        return response()->json($notebook);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $notebook = New Notebook();

        $notebook->fill($request->all());

        $notebook->save();

        return response()->json($notebook, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entity\Notebook  $notebook
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notebook = Notebook::find($id);

        if(!$notebook){
            return response()->json(['erro'=> 'Notebook nao encontrado'], 404);
        }

        return response()->json($notebook);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entity\Notebook  $notebook
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $notebook = Notebook::find($id);

        if(!$notebook){
            return response()->json(['erro'=> 'Notebook nao encontrado'], 404);

        }

        $notebook->fill($request->all());

        $notebook->update();

        return response()->json($notebook, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entity\Notebook  $notebook
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notebook = Notebook::find($id);

        if(!$notebook){
            return response()->json(['erro'=> 'Notebook nao encontrado'], 404);
        }
        $notebook->delete();

        return response()->json(['sucesso'=> 'Notebook excluido com sucesso'], 200);
    }
}
