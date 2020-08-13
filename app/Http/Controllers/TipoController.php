<?php

namespace App\Http\Controllers;

use App\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    protected $dataModel;

    /**
     * Display a listing of the resource.
     *
     * @param Tipo $tipo
     */

    public function __construct(Tipo $tipo)
    {

        $this->dataModel = $tipo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->dataModel->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        return $this->dataModel->create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show($tipo)
    {
        return $this->dataModel->find($tipo);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo $tipo)
    {
        return $this->dataModel->find($tipo);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo $tipo)
    {
        $reg = $this->dataModel->find($tipo)->first();
        return $reg->update($request->all());//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param \App\Tipo $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Tipo $tipo)
    {
        if ($this->dataModel->find($tipo)->first()->delete()){
//        if ($request->ajax()) {
            return response()->json('Registro excluído com sucesso', 200);
//        }
        }else{
            return response()->json('Problemas excluindo', 422);
        }
    }
}
