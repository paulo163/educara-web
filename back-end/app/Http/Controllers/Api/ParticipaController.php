<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Participa;
use Illuminate\Http\Request;

class ParticipaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Participa::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $participa = Participa::create($request->all());
        dd($participa);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participa  $participa
     * @return \Illuminate\Http\Response
     */
    public function show(Participa $participa)
    {
        return $participa;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participa  $participa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participa $participa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participa  $participa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participa $participa)
    {
        //
    }
}
