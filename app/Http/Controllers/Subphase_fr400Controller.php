<?php

namespace App\Http\Controllers;

use App\Subphase_fr400;
use Illuminate\Http\Request;

class Subphase_fr400Controller extends Controller
{

    public function index()
    {
        $subphase_fr400 = Subphase_fr400::all();
        return response()->json(['data'=>$subphase_fr400],200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Subphase_fr400::create($request->only(['description','phase_fr400s_id', 'status_id']));
        return response()->json(['Mensaje'=>'Subphase_fr400 creada','code'=>200],200);
    }


    public function show($id)
    {
        $subphase_fr400= Subphase_fr400::find($id);

        if(!$subphase_fr400){
            return response()->json(['Mensaje'=>'Subphase_fr400 '.$id.' no existe','code'=>404],404);
        }

        return response()->json(['data'=>$subphase_fr400],200);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
