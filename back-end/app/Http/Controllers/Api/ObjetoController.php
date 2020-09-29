<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Objeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ObjetoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Objeto::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $objeto = Objeto::create($request->except('file'));
        $objeto->filehash=hash_file('md5', $request->file);
        $objeto->size = $request->file->getSize();
        $objeto->extension = $request->file->getClientOriginalExtension();
        $objeto->path = $request->file->storeAs('objeto/' . $objeto->id, $objeto->filehash.'.'. $objeto->extension);
        $objeto->save();

        return $objeto;
        
    }

    public function update(Request $request, Objeto $objeto)
    {
        $objeto->nome=$request->nome;
        $objeto->descricao=$request->descricao;
        $objeto->filehash=hash_file('md5', $request->file);
        $objeto->size = $request->file->getSize();
        $objeto->extension = $request->file->getClientOriginalExtension();
        $objeto->path = $request->file->storeAs('objeto/' . $objeto->id, $objeto->filehash.'.'. $objeto->extension);
        $objeto->update();

        return $objeto;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Objeto  $objeto
     * @return \Illuminate\Http\Response
     */
    public function show(Objeto $objeto)
    {
        return Objeto::findOrFail($objeto->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Objeto  $objeto
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Objeto  $objeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objeto $objeto)
    {
        if (File::deleteDirectory(storage_path('app/files/objeto/') . $objeto->id)){
            $objeto->delete();
            return $objeto;
        }
        else return "Não apagou!";

        
    }

    public function download(Objeto $objeto)
    {
        // Check if file exists in app/storage/file folder

        $file_path = storage_path('app/files/') . $objeto->path;
        return response()->download($file_path);
    }
}
