<?php

namespace App\Http\Controllers;

use App\Models\Entity\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Cliente::all(); //para listar os clientes

        return response()->json($cliente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cliente = New Cliente();

        $cliente->fill($request->all());

        $cliente->save();

        return response()->json($cliente, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entity\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        if(!$cliente){
            return response()->json(['erro'=> 'Cliente nao encontrado'], 404);
        }

        return response()->json($cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entity\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $cliente = Cliente::find($id);

        if(!$cliente){
            return response()->json(['erro'=> 'Cliente nao encontrado'], 404);

        }

        $cliente->fill($request->all());

        $cliente->update();

        return response()->json($cliente, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entity\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);

        if(!$cliente){
            return response()->json(['erro'=> 'Cliente nao encontrado'], 404);
        }
        $cliente->delete();

        return response()->json(['sucesso'=> 'Cliente excluido com sucesso'], 200);
    }
}
