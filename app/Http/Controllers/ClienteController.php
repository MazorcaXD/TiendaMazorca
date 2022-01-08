<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use PDF;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function clientesPdf() {
        $clientes = Cliente::all();
        $data = compact('clientes');
        $pdf = PDF::loadView('pdf.clientes', $data);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('clientes.create',compact('clientes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'f_nacimiento' => 'required|date',
            'telefono' => 'required',
        ]);
        
        Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        $clientes = Cliente::find($cliente->id);
        return view('clientes.edit',compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $validated = $request->validate([
            'id' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'f_nacimiento' => 'required',
            'telefono' => 'required',
        ]);

        $cliente = Cliente::find($cliente->id);
        $cliente->update($request->all());
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        Cliente::find($cliente->id)->delete();
        return redirect()->route('clientes.index');
    }
}
